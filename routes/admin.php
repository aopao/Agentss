<?php
/**
 * 后台管理路由
 */
##获取管理后台路径前缀##
define('PREFIX' , config('admin.prefix'));

##后台登录处理##
Route::namespace('Admin')->prefix(PREFIX)->group(function() {
	Route::get('/login' , 'Login\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login' , 'Login\LoginController@login');
});

##后台具体业务路由##
Route::namespace('Admin')->prefix(PREFIX)->middleware('auth')->group(function() {
	Route::get('/' , 'DashboardController@index')->name('admin.index');
	Route::get('/dashboard' , 'DashboardController@index')->name('admin.index');
});