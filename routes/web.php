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

Route::get('/', function () {
    //return view('welcome');
    Route::get('test2', 'TestController@test2');//测试
});

Route::group(['prefix' => 'v1', 'namespace' => 'V1'], function () {
    Route::get('test2', 'TestController@test2');//测试
});
