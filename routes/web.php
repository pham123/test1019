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
    return view('welcome');
});
Route::get('/phpinfor', function () {
    return phpinfo();
});

Route::get('/company', function () {
    return view('hello');
});
// Controller kết nối model lấy dữ liệu sau đó trả về cho views 
Route::get('/test', 'TestController@test');
