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
Route::group([

    'prefix' => 'dashboard', 
    'namespace' => 'Dashboard', 
    'middleware' => 'auth'

], function () {

	// Dashboard
	Route::get('/', 'DashboardController@index')->name('dashboard');

	// User
    Route::resource('user', 'UserController');
    Route::post('user/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);
	Route::get('/guests', 'UserController@guests')->name('guests');
	Route::get('/staff', 'UserController@staff')->name('staff');
	Route::get('/add-user', 'UserController@addUser')->name('adduser');
    Route::post('/add-user', 'UserController@store')->name('adduser_post');
    //Route::get('/edit-user', 'UserController@store')->name('edit_user.store');
	//Route::get('/profile', 'UserController@profile')->name('profile.index');
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/profile/{id}', 'UserController@profile')->name('profile.id');

	// Calendar
    Route::get('/calendar', 'CalendarController@index')->name('calendar');
    Route::post('/calendar', 'CalendarController@store')->name('calendar.post');
    Route::post('/calendar/update', 'CalendarController@update')->name('calendar.update');

    //Route::get('/calendarlist', 'CalendarController@calendarList');
    Route::get('/calendarlist/{location}', 'CalendarController@calendarList');
    Route::post('/calendarlist', 'CalendarController@store');

    //Media
    Route::get('/media', 'MediaController@index')->name('media.index');
    Route::post('/media', 'MediaController@store')->name('media.post');
    Route::get('/media/create', 'MediaController@create')->name('media.create');

    //Events
    Route::get('/events', 'EventController@events')->name('events');
    Route::get('/events/{id}', 'EventController@show'); 
    Route::post('/events', 'EventController@store');

    // Event
    //Route::resource('/location', 'LocationController');

    // Location
    Route::resource('/location', 'LocationController');
    Route::post('location/{id}', ['as' => 'location.update', 'uses' => 'LocationController@update']);
    Route::post('location/schedule/{id}', ['as' => 'location.updateschedule', 'uses' => 'LocationController@updateLocationTime']);
    Route::post('/location/{id}/media', 'LocationController@media');
    
    //Route::resource('/location', 'LocationController@index')->name('location');
    //Route::get('/add-location', 'LocationController@index')->name('add-location');
    //Route::get('/location-list', 'LocationController@getEvents')->name('location-list');

    // Traffic
    Route::get('/analytics', 'TrafficController@index')->name('analytics');
    Route::get('/check-in', 'TrafficController@checkin')->name('checkin');
    Route::get('/sales', 'TrafficController@sales')->name('sales');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
