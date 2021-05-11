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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_test', 'viewcontroller@view');
Route::get('/mahasiswa', 'mahasiswa_controller@index');
Route::post('/mahasiswa/create','mahasiswa_controller@create');
Route::get('/deletemahasiswa/{nim_mahasiswa}','mahasiswa_controller@delete');
Route::get('/ketkp','input_mhs_controller@index');    
Route::get('/prakp','prakp_controller@index');
Route::get('/kp','kp_controller@index');