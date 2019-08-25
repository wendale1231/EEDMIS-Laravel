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

Auth::routes();

Route::get('/', 'HomeController@home');

//Added For Registration
Route::get('/home', 'HomeController@home');

Route::get('/IBJT', 'HomeController@ibjt');

Route::get('/admin', 'HomeController@admin');

Route::get('/Burial', 'HomeController@burial');

// Murag Useless ni siya so akong gi remove haha


// Route::get('/contact', function(){
// 	return view('contact');
// });

// Route::get('/about', function(){
// 	return view('about');
// });

// Route::get('/login', function(){
// 	return view('login');
// });





