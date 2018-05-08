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
		$students = $this->student->getAll();
		return view('admin.student.list' , compact('students'));
	}
}
