<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Repositories\ProvinceRepository;
use App\Repositories\StudentRepository;

class StudentController extends BaseController
{
	private $student;

	public function __construct(StudentRepository $studentRepository)
	{
		parent::__construct();
		$this->student = $studentRepository;
	}

	public function index(Request $request)
	{
		$key = $request->key;
		if (isset($key)) {
			$students = $this->student->getAllByQuery($key);
		} else {
			$students = $this->student->getAll();
		}
		return view('admin.student.index' , compact('students' , 'key'));
	}

	public function show($id)
	{
		$info = $this->student->getById($id);
		return view('admin.student.show' , compact('info'));
	}

	public function create(ProvinceRepository $provinceRepository)
	{
		# 获取省份列表
		$provinces = $provinceRepository->getAll();
		return view('admin.student.create' , compact('provinces'));
	}

	public function store(StudentRequest $studentRequest)
	{
		$this->student->store($studentRequest->all());
	}

	public function edit()
	{
		return 111;
	}

	public function update()
	{
		return 111;
	}

	public function delete()
	{
		return 111;
	}

	public function proSearch()
	{
		return 'proSearch';
	}

}
