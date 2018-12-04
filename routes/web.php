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

Route::get('/','studentController@index')->name('home');
Route::get('/create','studentController@create')->name('icreate');
Route::post('/create','studentController@store')->name('istore');
Route::get('edit/{id}','studentController@edit')->name('edit');
Route::post('update/{id}','studentController@update')->name('update');
Route::delete('delete/{id}', 'studentController@delete')->name('delete');

Route::get('upload', 'UploadController@imageUpload')->name('image.upload');

Route::post('upload', 'UploadController@imageUploadPost')->name('image.upload.post');



