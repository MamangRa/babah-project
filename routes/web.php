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

// Route::get('/', function () {
//     return view('welcome');
// });

// pages controller
Route::get('/','PagesController@home');

// admin controller
Route::get('/admin/login','AdminController@home');
Route::get('/admin/admin', 'AdminController@index');
Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/loginPost', 'AdminController@loginPost');
Route::get('/logout', 'AdminController@logout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
