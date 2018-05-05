<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2018/5/4
 * Time: 上午11:08
 */

namespace App\Repositories;

use App\Models\User;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository
{
	/**
	 * @var student
	 */
	private $user;

	/**
	 * StudentRepository constructor.
	 * @param $user $user
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 */
	public function getAll()
	{
		return $this->user->paginate(config('admin.page'));
	}

	public function getAllByQuery($key)
	{
		$keyword = '%' . $key . '%';
		return $this->user->orwhere('name' , 'like' , $keyword)
			->orWhere('mobile' , 'like' , $keyword)
			->orWhere('card' , 'like' , $keyword)
			->paginate(config('admin.page'));
	}

	public function getById($id)
	{
		return $this->user->find($id);
	}

	public function store(array $array)
	{
		return $this->user->create($array)->save();
	}

}