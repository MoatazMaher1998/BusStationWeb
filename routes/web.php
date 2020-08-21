<?php

use Illuminate\Support\Facades\Route;
Route::get('/admin','TripController@view_admin');
Route::post('/admin','ClientController@login');
Route::post('/admin_','TripController@submit_trip')->name('Add_Trip');
Route::post('/admin_filter','TripController@selectSomeTrips');
Route::post('/admin_all_trips','TripController@selectAllTrips');
Route::post('/register','ClientController@view_register');
Route::get('/', 'CityController@selectCities')->name('add');

Route::post('/try','ClientController@Addusers')->name('registerpost');

//Route::post('/admin', 'TripController@submit_trip')->name('add');

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/submit','ClientController@login');
Route::post('filter_search','TripController@filtertrips');
Route::get('/main', 'CityController@selectCities')->name('add');
Route::post('/main', 'TripController@filterTripsDatePost')->name('getTrips');
//Route::get('/admin','TripController@selectAllTrips')->name('admin');
Route::post('/admin/filter_search','TripController@filtertrips');
//Route::post('/submit','ClientController@check_admin');