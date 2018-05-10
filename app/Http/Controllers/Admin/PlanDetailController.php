<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Repositories\PlanRepository;
use App\Repositories\StudentRepository;
use App\Repositories\TypeRepository;

/**
 * Class PlanController
 * @package App\Http\Controllers\Admin
 */
class PlanDetailController extends BaseController
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
	 * @param $plan_id
	 * @return \Illuminate\Http\Response
	 */
	public function index($student_id , $plan_id)
	{
		$this->student->isAvailable($student_id);
		$info = $this->plan->getById($plan_id);
		return view('admin.student.detail' , compact('info' , 'student_id' , 'plan_id'));
	}


	/**
	 * @param $student_id
	 * @param $plan_id
	 * @return array
	 */
	public function create($student_id , $plan_id)
	{
		$this->student->isAvailable($student_id);
		$this->type->isAvailable($plan_id);
		switch ($plan_id) {
			case 1:
				$plan = $this->plan->getById($plan_id);
				$student = $this->student->getById($student_id);
				return view('admin.student.college_create' , compact('plan' , 'student'));
		}
	}


	public function detail($student_id , $plan_id)
	{
		$this->student->isAvailable($student_id);
		$this->type->isAvailable($plan_id);
		return view('admin.student.detail');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 */
	public function destroy($id)
	{

	}

	public function search(Request $request)
	{
		$mongo_client = DB::connection('mongodb')->collection('list');

		$admitted = $request->admitted == 1 ? '理科' : '文科';

		$province = $request->province;

		$mongo = $mongo_client->where('subject' , '=' , '' . $admitted . '');

		$mongo = $mongo_client->where('provinces' , '=' , '' . $province . '');

		if (isset($request->school_name)) {
			$mongo = $mongo_client->where('school' , 'like' , '%' . $request->school_name . '%');
		}
		if (isset($request->major_remark)) {
			$mongo = $mongo_client->where('major' , 'like' , '%' . $request->major_remark . '%');
		}

		if (isset($request->province_name)) {
			$mongo = $mongo_client->where('provinces' , 'like' , '%' . $request->province_name . '%');
		}

		if (isset($request->begin_score)) {
			$mongo = $mongo_client->where('lowest' , '>' , '' . $request->begin_score . '');
		}

		if (isset($request->end_score)) {
			$mongo = $mongo_client->where('lowest' , '<' , $request->end_score);
		}

//		$lists = $mongo->orderBy('year' , 'desc')->take(10)->get()->Toarray();
		$lists = $mongo->orderBy('year' , 'desc')->get()->Toarray();
		return view('admin.student.list' , compact('lists'));
	}
}
