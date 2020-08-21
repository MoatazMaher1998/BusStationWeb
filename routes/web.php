<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/try','ClientController@Addusers')->name('registerpost');
Route::get('/login', 'TripController@view_admin')->name('login');
Route::post('/admin', 'TripController@submit_trip')->name('add');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/submit','ClientController@login');
Route::get('/admin/government/{id}','TripController@selectSomeTrips');
Route::get('/admin','TripController@selectAllTrips')->name('admin');
Route::post('/admin/filter_search','TripController@filtertrips');
//Route::post('/submit','ClientController@check_admin');