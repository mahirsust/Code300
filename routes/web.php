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
Route::get('/uploadfile', 'UploadFileController@index')->name('upload_file');
Route::get('/particles', 'HomeController@particles')->name('particles');
Route::POST('/result', 'FileController@save')->name('result');
