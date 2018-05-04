<?php

/**
 * 前台界面路由
 */

/**
 * 登录路由
 */
##系统登录路由##
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');