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

//Route::get('/', function () {
//    return view('welcome');
//});

//（自己的控制器） 模块。控制器。方法

Route::get('/{page?}',     'Home\IndexController@index');
//Route::get('admin/add', 'Home\IndexController@insert');
Route::get('home/welcome','Home\IndexController@welcome');
Route::post('home/add', 'Home\IndexController@insert');

Route::get('home/del/{id}', 'Home\IndexController@del');
Route::get('home/update/{id}', 'Home\IndexController@update');
Route::post('home/updatedes', 'Home\IndexController@updatedes');
//后台
Route::get('admin/index', 'Admin\IndexController@index');
Route::get('admin/admin', 'Admin\AdminController@index');
