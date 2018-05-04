<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;

class IndexController extends BaseController
{

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('home');
	}
}
