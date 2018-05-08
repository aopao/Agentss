<?php

namespace App\Http\Controllers\Admin;


/**
 * Class DashboardController
 * @package App\Http\Controllers\Admin
 */
class DashboardController extends BaseController
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		return view('admin.dashboard.index');
	}

}
