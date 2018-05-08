<?php

namespace App\Repositories;

use App\Models\Plan;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class PlanRepository
{
	/**
	 * @var student
	 */
	private $plan;

	/**
	 * StudentRepository constructor.
	 * @param $plan $plan
	 */
	public function __construct(Plan $plan)
	{
		$this->plan = $plan;
	}


	public function getAll($type_id , $student_id)
	{
		return $this->plan->where('type_id' , $type_id)->where('student_id' , $student_id)->with('user' , 'type' , 'student')->paginate(config('admin.page'));
	}

	/**
	 * @param $key
	 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
	 */
	public function getAllByQuery($key)
	{
		$keyword = '%' . $key . '%';
		return $this->plan->orwhere('name' , 'like' , $keyword)
			->orWhere('mobile' , 'like' , $keyword)
			->orWhere('card' , 'like' , $keyword)
			->paginate(config('admin.page'));
	}

	/**
	 * @param $id
	 * @return mixed|static
	 */
	public function getById($id)
	{
		return $this->plan->find($id);
	}

	/**
	 * @param $plan_id
	 */
	public function isAvailable($plan_id)
	{
		if (!$this->getById($plan_id)) {
			abort(404);
		}
	}

	public function getByTypeId($type_id)
	{
		return $this->plan->where('type_id' , $type_id)->with('user' , 'type' , 'student')->get();
	}

	/**
	 * @param array $array
	 * @param $id
	 * @return bool
	 */
	public function update(array $array , $id)
	{
		$type = $this->plan->find($id);
		return $type->update($array);
	}

	/**
	 * @param array $array
	 * @return bool
	 */
	public function store(array $array)
	{
		return $this->plan->create($array)->save();
	}

	/**
	 * @param $id
	 * @return int
	 */
	public function destroy($id)
	{
		return $this->plan->destroy($id);
	}

}