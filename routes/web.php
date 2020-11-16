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

Route::get('/', 'ZDTController@index');
Route::get('/daftar', 'ZDTController@register');
Route::post('/proses-daftar', 'ZDTController@register_proses');
Route::get('/masuk', 'ZDTController@login');
Route::post('/proses-masuk', 'ZDTController@login_proses');
Route::get('/logout', 'ZDTController@logout');