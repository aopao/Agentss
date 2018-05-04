<?php

/**
 * 前台界面路由
 */

/**
 * 登录路由
 */
##代理商登录路由##
Auth::routes();

Route::namespace('Agent')->prefix('agent')->middleware('auth')->group(function() {
	Route::get('/' , 'DashboardController@index')->name('agent.index');
});