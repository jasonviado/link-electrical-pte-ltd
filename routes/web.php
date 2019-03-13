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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/living-room', 'LivingRoomController@index');
Route::get('/kitchen', 'KitchenController@index');
Route::get('/bedrooms', 'BedRoomsController@index');
Route::get('/dining', 'DiningController@index');
Route::get('/bathroom', 'BathRoomController@index');


Route::get('/about-us', 'AboutUsController@index');
Route::get('/contact-us', 'ContactUsController@index');