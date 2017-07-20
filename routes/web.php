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

/*Route::get('/', function () {
    return view('home');
});*/


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Auth::routes();
Route::group(['namespace' => 'Admin','prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

//For Users
    Route::get('/users', 'UsersController@index');
    Route::get('/profile/{user}', 'UsersController@show');

//For Configuration
    //
    Route::get('/skills', 'SkillsController@index')->name('skills');
    Route::post('/skill/add', 'SkillsController@store');
    Route::get('/skill/edit/{skill}', 'SkillsController@edit');
    Route::post('/skill/update', 'SkillsController@update');
    Route::get('/skill/delete/{skill}', 'SkillsController@destroy');
});


//For Just Prefix admin but Actual File Outside.
Route::group(['prefix' => 'admin'], function () {
    Route::get('/resume/basics','ResumeController@basic');
    Route::post('/resume/basics/update','ResumeController@basicsUpdate');
});


