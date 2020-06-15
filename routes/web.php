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

//route to home page
Route::get('/', 'PagesController@index');
//route to about page
Route::get('/about', 'PagesController@about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
