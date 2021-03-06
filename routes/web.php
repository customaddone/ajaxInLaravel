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


Route::get('/hello', function () {  //←追記
  return view('layouts.layouts');
});

Route::get('/home', function () {  //←追記
  return view('editors.home');
});

Route::resource('texts', 'TextsController');
