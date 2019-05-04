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


// Routes for website
Route::namespace('Site')->group(function() {
    Route::get('/', 'SiteController@index');
    Route::get('/news', 'SiteController@news');
    Route::get('/about', 'SiteController@about');
    Route::get('/news/{id}', 'SiteController@newsSingle')->name('news-single');
    Route::post('/news-search', 'SiteController@searchNews')->name('news-search');
    Route::match(['GET', 'POST'],'/cars', 'SiteController@cars');
    Route::post('/cars-search', 'SiteController@searchCars')->name('cars-search');
    Route::get('/cars/{id}', 'SiteController@carSingle')->name('car-single');
    Route::post('/receive-form', 'SiteController@form')->name('send-form');
    Route::get('/contact', 'SiteController@contact');
    Route::post('/leave-contact', 'SiteController@leaveContact');
});

// Routes for admin dashboard
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['admin','auth']], function(){
    Route::resource('cars','CarsController');
    Route::resource('news','NewsController');
    Route::get('forms','AdminController@forms');
    Route::delete('form-delete/{id}','AdminController@deleteForm')->name('form-delete');
});


Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
