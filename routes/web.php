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


// Routes for admin dashboard
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['admin','auth']], function(){
    Route::resource('cars','CarsController');
});


Auth::routes();

