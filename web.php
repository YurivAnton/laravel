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

Route::get('/', function () {
    return view('welcome');
});
/*
//2.1-2.12
Route::get('/test', function (){
    return '!';
});
Route::get('/dir/test/', function (){
    return '!!';
});
Route::get('/user/{id}', function ($id){
    return $id;
});
Route::get('/user/{name}/', function ($name){
    return $name;
});
Route::get('/sum/{num1}/{num2}/', function ($num1, $num2){
    return $num1 + $num2;
});

Route::get('/user/show-{id}', function ($id){
    return $id;
});
Route::get('/user/{id?}', function ($id=0){
    return $id;
});

Route::get('/user/{id}', function ($id){
    return $id;
})->where('id', '\d+');

Route::get('/user/{id}/{name}', function ($id, $name){
    return $id.' '.$name;
})->where(['id'=>'\d+', 'name'=>'[a-z]{2,}']);

Route::get('/articles/{date}', function ($date){
    return $date;
})->where('date', '\d{4}-\d{2}-\d{2}');
*/
Route::get('/users/{order}/', function ($order){
    return $order;
})->where('order', 'name|surname|age');
