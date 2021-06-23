<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user','App\Http\Controllers\UsersController@index');
Route::post('user','App\Http\Controllers\UsersController@create');
Route::put('/user/{id}','App\Http\Controllers\UsersController@update');
Route::delete('/user/{id}','App\Http\Controllers\UsersController@delete');

Route::get('company','App\Http\Controllers\CompanyController@index');
Route::post('company','App\Http\Controllers\CompanyController@create');
Route::put('/company/{id}','App\Http\Controllers\CompanyController@update');
Route::delete('/company/{id}','App\Http\Controllers\CompanyController@delete');
