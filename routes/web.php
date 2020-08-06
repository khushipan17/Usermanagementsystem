<?php

use Illuminate\Support\Facades\Route;

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





Route::get('/welcome' , 'UserConroller@index');

Route::get('/add-user' , 'UserConroller@create');

Route::post('/add-user' , 'UserConroller@store');

Route::get('/user/delete/{id}' , 'UserConroller@delete');

Route::get('/user/edit/{id}' , 'UserConroller@edit');

Route::post('/update-user/{id}' , 'UserConroller@update');