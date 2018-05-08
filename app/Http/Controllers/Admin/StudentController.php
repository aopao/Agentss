<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Repositories\TypeRepository;
use App\Http\Requests\StudentRequest;
use App\Repositories\ProvinceRepository;
use App\Repositories\StudentRepository;

class StudentController extends BaseController
{
	private $student;
	private $type;

	public function __construct(StudentRepository $studentRepository , TypeRepository $typeRepository)
	{
		parent::__construct();
		$this->student = $studentRepository;
		$this->type = $typeRepository;
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
		if (!isset($info))
			abort(404);
		$list = $this->type->getList();
		return view('admin.student.show' , compact('info' , 'list'));
	}

	public function create(ProvinceRepository $provinceRepository)
	{
		# 获取省份列表
		$provinces = $provinceRepository->getAll();
		return view('admin.student.create' , compact('provinces'));
	}

	public function store(StudentRequest $studentRequest)
	{
		if ($this->student->store($studentRequest->all())) {
			return redirect(route('admin.student.index'));
		}
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
