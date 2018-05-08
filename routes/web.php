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


Route::get('/' , 'IndexController@index');

#前后端用户判断跳转路径
Route::get('/redirect' , 'Auth\RedirectController@index');

##代理商管理路由##
include_once __DIR__ . '/agent.php';
##管理员管理路由##
include_once __DIR__ . '/admin.php';