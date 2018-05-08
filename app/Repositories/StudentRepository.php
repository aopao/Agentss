<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2018/5/4
 * Time: 上午11:08
 */

namespace App\Repositories;

use App\Models\Student;

/**
 * Class StudentRepository
 * @package App\Repositories
 */
class StudentRepository
{
	/**
	 * @var student
	 */
	private $student;

	/**
	 * StudentRepository constructor.
	 * @param $student $student
	 */
	public function __construct(Student $student)
	{
		$this->student = $student;
	}

	/**
	 */
	public function getAll()
	{
		return $this->student->paginate(config('admin.page'));
	}


	public function getAllByQuery($key)
	{
		$keyword = '%' . $key . '%';
		return $this->student->orwhere('name' , 'like' , $keyword)
			->orWhere('mobile' , 'like' , $keyword)
			->orWhere('card' , 'like' , $keyword)
			->with([ 'province' , 'user' ])->paginate(config('admin.page'));
	}

	public function getById($id)
	{
		return $this->student->with([ 'province' , 'user' ])->find($id);
	}

	public function isAvailable($student_id)
	{
		if (!$this->student->find($student_id)) {
			abort(404);
		}
	}

	public function store(array $array)
	{
		return $this->student->create($array)->save();
	}

}