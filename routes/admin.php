<?php
/**
 * 后台管理路由
 */
##获取后台路径前缀##
define('PREFIX' , config('admin.prefix'));

##后台登录处理##
Route::get(PREFIX . '/login' , 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post(PREFIX . '/login' , 'Admin\LoginController@login');

Route::group([ 'prefix' => PREFIX , 'middleware' => 'auth' ] , function() {
	Route::get('/center' , 'Admin\CenterController@index')->name('admin.center');
});