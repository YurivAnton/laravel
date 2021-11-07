<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page;
use App\Http\Controllers\Test;
use App\Http\Controllers\Employee;
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

Route::get('/users/{order}/', function ($order){
    return $order;
})->where('order', 'name|surname|age');
Route::get('/{year}/{month}/{day}/', function ($year, $month, $day){
    $weekDay = ['ned', 'pon', 'viv', 'ser', 'cet', 'pia', 'sub'];
    return $weekDay[date('w', mktime(0,0,0,$month,$day,$year))];
})->where(['year'=>'\d{4}', 'month'=>'\d{2}', 'day'=>'\d{2}]);

//3.1-3.13
Route::get('/pages/showOne/{id}/', [Page::class, 'showOne'])->where('id', '\d+');
Route::get('/pages/showAll', [Page::class, 'showAll']);
Route::get('/test/sum/{num1}/{num2}/', [Test::class, 'sum'])->where(['num1'=>'\d+', 'num2'=>'\d+']);
Route::get('/employee/showOne/{id}', [Employee::class, 'showOne'])->where('id', '\d+');
Route::get('/employee/showField/{id}/{param}/', [Employee::class, 'showField'])->where(['id'=>'\d+', 'param'=>'name|surname|salary']);
*/

//5.1
/*Route::get('test/show/{name}/{age}/{salary}/', [Test::class, 'show']);
Route::get('/test/sum/{num1}/{num2}/', [Test::class, 'sum'])->where(['num1'=>'\d+', 'num2'=>'\d+']);*/

//6
Route::get('/test/show/', [Test::class, 'show']);
