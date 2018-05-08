<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Repositories\PlanRepository;
use App\Repositories\StudentRepository;
use App\Repositories\TypeRepository;

/**
 * Class PlanController
 * @package App\Http\Controllers\Admin
 */
class PlanController extends BaseController
{
	/**
	 * @var TypeRepository
	 */
	private $type;
	/**
	 * @var PlanRepository
	 */
	private $plan;
	/**
	 * @var StudentRepository
	 */
	private $student;

	/**
	 * PlanController constructor.
	 * @param PlanRepository $planRepository
	 * @param StudentRepository $studentRepository
	 * @param TypeRepository $typeRepository
	 */
	public function __construct(PlanRepository $planRepository , StudentRepository $studentRepository , TypeRepository $typeRepository)
	{
		parent::__construct();
		$this->plan = $planRepository;
		$this->type = $typeRepository;
		$this->student = $studentRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param $student_id
	 * @param $type_id
	 * @return \Illuminate\Http\Response
	 */
	public function index($student_id , $type_id)
	{
		$this->student->isAvailable($student_id);
		$this->type->isAvailable($type_id);

		$info = $this->student->getById($student_id);
		$type_list = $this->type->getList();

		#获取该方案 ID 的具体列表数据
		$plan_list = $this->plan->getAll($type_id , $student_id);
		return view('admin.student.plan' , compact('info' , 'type_list' , 'type_id' , 'plan_list'));
	}


	/**
	 * @param $student_id
	 * @param $type_id
	 * @return array
	 */
	public function create($student_id , $type_id)
	{
		$name = $this->type->getById($type_id);
		#获取分类信息
		$data = [
			'number' => date('YmdHis' , time()) . rand(1000 , 9999) ,
			'name' => $name[ 'name' ] ,
			'student_id' => $student_id ,
			'type_id' => $type_id ,
			'producer' => Auth::user()->id ,
		];
		if ($this->plan->store($data)) {
			return [ 'status' => '1' ];
		} else {
			return [ 'status' => '0' ];
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{

	}
}
