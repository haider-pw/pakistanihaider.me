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

Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware'=>'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //For Users
    Route::get('/users', 'UsersController@index');
    Route::get('/profile/{user}', 'UsersController@show');

    //For Resume
    Route::get('/skills', 'SkillsController@index')->name('skills');
    Route::post('/skill/add', 'SkillsController@store');
    Route::get('/skill/edit/{skill}', 'SkillsController@edit');
    Route::post('/skill/update', 'SkillsController@update');
    Route::get('/skill/delete/{skill}', 'SkillsController@destroy');

    Route::get('/portfolio','PortfolioController@show');

    Route::get('/resume/basics','ResumeController@basic');
    Route::post('/resume/basics/update','ResumeController@basicsUpdate');


    //For System Configurations
    Route::group(['namespace'=>'System'],function(){
        Route::get('/systemSkills', 'SkillsController@show')->name('sysSkills');
        Route::get('/systemSkillsGroups', 'SkillsGroupsController@show')->name('sysSkillsGroups');
        Route::get('/systemConfiguration', 'ConfigurationController@show')->name('sysConfiguration');
    });
});


