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

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/addimage', 'HomeController@add')->name('home.addimage');
Route::post('/home/addimage', 'HomeController@store');
Route::get('/home/allimage', 'HomeController@allimage')->name('home.allimage');