<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;

class DashboardController extends BaseController
{

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('agent.dashboard.index');
	}
}
