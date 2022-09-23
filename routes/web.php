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

Route::get('/', 'Main@index')->name('index');
Route::get('/login', 'Main@login')->name('login');
Route::post('/logar', 'Main@logar')->name('logar');
Route::get('/temp', 'Main@temp')->name('temp');
Route::get('/home', 'Main@home')->name('home');
Route::get('/sair', 'Main@sair')->name('sair');




