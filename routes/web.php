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
Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {

	// Dashboard
	Route::get('/', 'DashboardController@index')->name('dashboard');

	// User
	Route::get('/guests', 'UserController@guests')->name('guests');
	Route::get('/staff', 'UserController@staff')->name('staff');
	Route::get('/add-user', 'UserController@addUser')->name('adduser');
    Route::post('/add-user', 'UserController@addUserPost')->name('adduser_post');
    Route::get('/edit-user', 'UserController@store')->name('edit_user.store');
	//Route::get('/profile', 'UserController@profile')->name('profile.index');
    Route::get('/profile', 'UserController@profile')->name('profile');

	// Calendar
    Route::get('calendar', 'EventController@index')->name('calendar');
    Route::get('events', 'EventController@index')->name('events');

    // Location
    Route::get('location', 'LocationController@index')->name('location');
    Route::get('location-list', 'LocationController@getEvents')->name('location-list');

    // Traffic
    Route::get('analytics', 'TrafficController@index')->name('analytics');
    Route::get('check-in', 'TrafficController@checkin')->name('checkin');
    Route::get('sales', 'TrafficController@sales')->name('sales');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
