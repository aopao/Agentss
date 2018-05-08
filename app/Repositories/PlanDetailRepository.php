<?php

namespace App\Repositories;

use App\Models\PlanDetail;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class PlanDetailRepository
{
	/**
	 * @var student
	 */
	private $planDetail;

	/**
	 * StudentRepository constructor.
	 * @param $planDetail $planDetail
	 */
	public function __construct(PlanDetail $planDetail)
	{
		$this->planDetail = $planDetail;
	}


	public function getAll($type_id , $student_id)
	{
		return $this->planDetail->where('type_id' , $type_id)->where('student_id' , $student_id)->with('user' , 'type' , 'student')->paginate(config('admin.page'));
	}

	/**
	 * @param $key
	 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
	 */
	public function getAllByQuery($key)
	{
		$keyword = '%' . $key . '%';
		return $this->planDetail->orwhere('name' , 'like' , $keyword)
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
		return $this->planDetail->find($id);
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
		return $this->planDetail->where('type_id' , $type_id)->with('user' , 'type' , 'student')->get();
	}

	/**
	 * @param array $array
	 * @param $id
	 * @return bool
	 */
	public function update(array $array , $id)
	{
		$type = $this->planDetail->find($id);
		return $type->update($array);
	}

	/**
	 * @param array $array
	 * @return bool
	 */
	public function store(array $array)
	{
		return $this->planDetail->create($array)->save();
	}

	/**
	 * @param $id
	 * @return int
	 */
	public function destroy($id)
	{
		return $this->planDetail->destroy($id);
	}

}