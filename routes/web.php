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

Route::get('/','HomeController@Home');
Route::get('Home','HomeController@Home');
Route::post('/SaveUserMessage','PagesController@SaveUserMessage');
Route::get('/ContactUs','PagesController@ContactUs');
