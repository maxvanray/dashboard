<?php

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your customer. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//dashboard
Route::group([

    'prefix' => 'tenant',
    'namespace' => 'Tenant'

], function () {

	// Home
	Route::get('/', 'TenantController@index')->name('tenant');

});

