<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/admin','TripController@view_admin');
Route::post('/admin','ClientController@login');
Route::post('/admin_','TripController@submit_trip')->name('Add_Trip');
Route::post('/admin_filter','TripController@selectSomeTrips');
Route::post('/admin_all_trips','TripController@selectAllTrips');
Route::post('/register','ClientController@view_register');
Route::get('/', 'CityController@selectCities')->name('add');

Route::post('/try','ClientController@Addusers')->name('registerpost');

//Route::post('/admin', 'TripController@submit_trip')->name('add');

Route::get('/book', function () {
    return view('booking page');
})->name('register');
Route::get('/trips', function () {
    return view('trips');
})->name('trips');

Route::get('/ticket', function () {
    return view('ticket');
})->name('tikcet');
Route::post('/submit','ClientController@login');
Route::post('filter_search','TripController@filtertrips');
Route::post('deleteTrip','TripController@deleteTrip');
Route::get('/main', 'CityController@selectCities')->name('add');
Route::post('/main', 'TripController@filterTripsDatePost')->name('getTrips');
Route::post('/book','TripController@view_book');
Route::post('/ticket','TripController@submit_ticket');
//Route::get('/admin','TripController@selectAllTrips')->name('admin');
Route::post('/admin/filter_search','TripController@filtertrips');
Route::post('/userSubmit',function(Request $request){
    echo $request->trip_id;
    });
//Route::post('/submit','ClientController@check_admin');