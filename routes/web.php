<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\User;

Route::get('/' , function() {
//	return view('welcome');
	$user = new User;
	echo $user->show_url;
	echo $user->edit_url;
	return User::all();
});

##代理商管理路由##
include_once __DIR__ . '/agent.php';
##后台管理路由##
include_once __DIR__ . '/admin.php';