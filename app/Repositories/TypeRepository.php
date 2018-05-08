<?php

namespace App\Repositories;

use Cache;
use App\Models\Type;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class TypeRepository
{
	/**
	 * @var student
	 */
	private $type;

	/**
	 * StudentRepository constructor.
	 * @param $type $type
	 */
	public function __construct(Type $type)
	{
		$this->type = $type;
	}


	/**
	 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
	 */
	public function getAll()
	{
		return $this->type->paginate(config('admin.page'));
	}


	/**
	 * @return array|mixed
	 */
	public function getList()
	{
		if (Cache::get('type_list')) {
			return Cache::get('type_list');
		} else {
			$data = $this->type->pluck('id' , 'name')->toArray();
			Cache::forever('type_list' , $data);
			return $data;
		}
	}

	/**
	 * @param $key
	 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
	 */
	public function getAllByQuery($key)
	{
		$keyword = '%' . $key . '%';
		return $this->type->orwhere('name' , 'like' , $keyword)
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
		return $this->type->find($id);
	}

	/**
	 * @param $type_id
	 */
	public function isAvailable($type_id)
	{
		if (!$this->getById($type_id)) {
			abort(404);
		}
	}

	/**
	 * @param array $array
	 * @param $id
	 * @return bool
	 */
	public function update(array $array , $id)
	{
		$type = $this->type->find($id);
		return $type->update($array);
	}

	/**
	 * @param array $array
	 * @return bool
	 */
	public function store(array $array)
	{
		return $this->type->create($array)->save();
	}

	/**
	 * @param $id
	 * @return int
	 */
	public function destroy($id)
	{
		return $this->type->destroy($id);
	}

}