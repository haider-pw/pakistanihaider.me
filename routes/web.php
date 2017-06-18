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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin','prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/users', 'UsersController@index');
    Route::get('/profile/{user}', 'UsersController@show');
});
