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
Route::match(['get', 'post'], '/guestBoard/moderator', 'GuestBoard@moderator')->middleware('auth', 'CheckRole:admin');

Route::match(['get', 'post'], '/bulletinBoard', 'BulletinBoard@index');
Route::match(['get', 'post'], '/bulletinBoard/add', 'BulletinBoard@index');



Route::get('/countries/', 'CountriesCities@index')->middleware('auth');
Route::get('/countries/admin/', 'CountriesCities@admin')->middleware('auth', 'CheckRole:admin');
Route::get('/countries/admin/show/{title}', 'CountriesCities@show')->middleware('auth', 'CheckRole:admin');
Route::get('/countries/admin/add/{title}', 'CountriesCities@add')->middleware('auth', 'CheckRole:admin');
Route::get('/countries/admin/edit/{title}', 'CountriesCities@edit')->middleware('auth', 'CheckRole:admin');
Route::get('/countries/admin/delete/{title}', 'CountriesCities@delete')->middleware('auth', 'CheckRole:admin');
