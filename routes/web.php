<?php

use Illuminate\Support\Facades\Route;

Route::get('/employee/', "App\Http\Controllers\UserController@index")->middleware('auth');
Route::get('/home', "App\Http\Controllers\HomeController@index");
Route::get('/employee/edit/{id}', "App\Http\Controllers\UserController@edit")->middleware('auth');
Route::get('/employee/create', "App\Http\Controllers\UserController@create")->middleware('auth');
Route::post('/employee/store', "App\Http\Controllers\UserController@store")->middleware('auth');
Route::post('/employee/update/{id}', "App\Http\Controllers\UserController@update")->middleware('auth');
Route::get('/employee/destroy/{id}', "App\Http\Controllers\UserController@destroy")->middleware('auth');
Auth::routes();

