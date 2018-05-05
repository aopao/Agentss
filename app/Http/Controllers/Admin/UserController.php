<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends BaseController
{
	private $user;

	public function __construct(UserRepository $userRepository)
	{
		parent::__construct();
		$this->user = $userRepository;
	}

	public function index(Request $request)
	{
		$key = $request->key;
		if (isset($key)) {
			$users = $this->user->getAllByQuery($key);
		} else {
			$users = $this->user->getAll();
		}
		return view('admin.user.index' , compact('users' , 'key'));
	}
}
