<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page;
use App\Http\Controllers\Test;
use App\Http\Controllers\Employee;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Product;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
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
/*Route::get('/test/show/', [Test::class, 'show']);
Route::get('/', [Test::class, 'home']);
Route::get('/contact/', [Test::class, 'contact']);
Route::get('/about', [Test::class, 'about']);
Route::get('/test/practic/', [Test::class, 'practic']);*/

//10
/*Route::get('/posts/{id}/', [PostController::class, 'showOne']);
Route::get('/posts/', [PostController::class, 'showAll']);

Route::get('/product/{category_id}/{product_id}/', [Product::class, 'showProduct']);
Route::get('/product/{category_id}/', [Product::class, 'showCategory']);
Route::get('/categories/', [Product::class, 'showCategoryList']);*/

//11
/*Route::get('/test/form/', [Test::class, 'form']);
Route::post('/test/result/', [Test::class, 'result']);*/

//12
//Route::match(['GET', 'POST'], '/test/form/', [Test::class, 'postGet']);

//13
//Route::match(['GET', 'POST'], '/test/form/', [Test::class, 'registration']);
/*Route::match(['get', 'post'], '/test/form/{name}/{surname}/', [Test::class, 'registration']);
Route::get('/test/method/', [Test::class, 'method']);*/

//14
/*Route::get('/test/session/', [Test::class, 'sessionPut']);
Route::get('/test/sessionGet/', [Test::class, 'sessionGEt']);
Route::get('/test/method1/', [Test::class, 'method1']);
Route::get('/test/method2/', [Test::class, 'method2']);
Route::get('/test/sessionFlush/', [Test::class, 'sessionFlush']);
Route::get('/test/all/', [Test::class, 'all']);
Route::get('/test/sessionHas/', [Test::class, 'sessionHas']);
Route::get('/test/session/', [Test::class, 'session']);*/

//15
//Route::match(['get', 'post'], '/test/redirect/', [Test::class, 'redirect']);
//Route::match(['get', 'post'], '/test/redirect2/', [Test::class, 'redirect2']);
//Route::get('/test/redirect2', [Test::class, 'redirect2'])->name('red');
Route::get('/test/red/', [Test::class, 'red']);
Route::get('/test/{param1}/{param2}/', [Test::class, 'result'])->name('result');

//16
/*Route::get('/test/flash/', [Test::class, 'flash']);
Route::get('/test/result/', [Test::class, 'result']);*/


