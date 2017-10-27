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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//dashboard
Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    Route::resource('calendar', 'CalendarController');
    Route::resource('user_profile', 'UserController');
    Route::resource('edit_user', 'EditUserController');
    Route::resource('new_user', 'NewUserController');
    Route::resource('event', 'EventController');
});
