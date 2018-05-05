<?php
/**
 * 后台管理路由
 */
##获取管理后台路径前缀##
define('PREFIX' , config('admin.prefix'));

##后台登录处理##
Route::namespace('Admin')->prefix(PREFIX)->group(function() {
	Route::get('/login' , 'LoginController@showLoginForm')->name('admin.login');
	Route::post('/login' , 'LoginController@login');
});

##后台具体业务路由##
Route::namespace('Admin')->prefix(PREFIX)->middleware('auth')->group(function() {
	##后台首页路由##
	Route::get('/' , 'DashboardController@index')->name('admin.index');
	Route::get('dashboard' , 'DashboardController@index')->name('admin.index');

	## 学生管理路由##
	Route::get('pro_search' , 'StudentController@proSearch')->name('admin.student.pro_search');
	Route::resource('student' , 'StudentController' , [ 'names' => [
		'index' => 'admin.student.index' ,
		'show' => 'admin.student.show' ,
		'create' => 'admin.student.create' ,
		'store' => 'admin.student.store' ,
		'edit' => 'admin.student.edit' ,
		'update' => 'admin.student.update' ,
		'destroy' => 'admin.student.destroy' ,
	] ]);

	## 用户管理路由##
	Route::resource('user' , 'UserController');

	##地区三级联动##
	Route::get('/regin/city' , 'ReginController@getCityById')->name('admin.region.city');
	Route::get('/regin/area' , 'ReginController@getAreaById')->name('admin.region.area');
});