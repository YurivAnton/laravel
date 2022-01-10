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
Route::get('/users', 'Test@index');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::match(['get', 'post'], '/guestBoard', 'GuestBoard@index');
Route::match(['get', 'post'], '/guestBoard/add', 'GuestBoard@add');
Route::match(['get', 'post'], '/guestBoard/moderator', 'GuestBoard@moderator');

Route::match(['get', 'post'], '/bulletinBoard', 'BulletinBoard@index');
Route::match(['get', 'post'], '/bulletinBoard/add', 'BulletinBoard@index');

Route::get('/countries/', 'CountriesCities@index')->middleware('auth');
Route::get('/countries/{admin}', 'CountriesCities@admin')->middleware('CheckRole:admin');