<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function sum($num1, $num2)
    {
        return $num1 + $num2;
    }

    /*public function show($name, $age, $salary)
    {
        $class = 'first';
        $style = 'color: red';
        $text = 'link';
        $href = '/test/sum/1/1/';
        return view('Test.show', ['name'=>$name,
                                        'age'=>$age,
                                        'salary'=>$salary,
                                        'class'=>$class,
                                        'style'=>$style,
                                        'text'=>$text,
                                        'href'=>$href
                                        ]);*/

        /*$employees = ['name'=>'user1', 'age'=>'35', 'salary'=>1000];
        $city = ['Bratislava', 'Honkong'];
        $location = ['country'=>'slovakia', 'city'=>'Bratislava'];
        $year = '1986';
        $month = '07';
        $day = '03';
        $str = '<b>строка</b>';

        return view('Test.show', ['employee'=>$employees, 'year'=>$year,
                                        'month'=>$month, 'day'=>$day, //'location'=>$location,
                                        'str'=>$str]);
    }*/

    //6
    /*public function show()
    {
        $day = 2;
        $month = 123;
        $age = 17;
        $arr = [];

        return view('Test.show', ['day' => $day, 'month'=>$month, 'age'=>$age, 'arr'=>$arr]);
    }*/

    //7
    public function show()
    {
        $arr = [9, 144, 625, 16, 2, 25];
        $str = ['aaaaa', 'bbbb', 'cccccc'];
        $data = [12, 2];
        $arr5 = [];
        $title = 'Show';

        for ($i = 1; $i <= 25; $i++)
        {
            $arr5[] = $i;
        }
        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
        ];

        return view('Test.show', [ 'arr'=>$arr,
                                        'str'=>$str,
                                        'data'=>$data,
                                        'arr5'=>$arr5,
                                        'employees'=>$employees,
                                        'title'=>$title
                                        ]);
    }

    public function home()
    {
        $title = 'Home';
        return view('Test.home', ['title'=>$title]);
    }

    public function contact()
    {
        $title = 'Contact';
        return view('Test.contact', ['title'=>$title]);
    }

    public function about()
    {
        $title = 'About';
        return view('Test.about', ['title'=>$title]);
    }

    public function practic()
    {
        $title = 'Practic';
        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];

        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];

        $inputs = ['input1', 'input2', 'input3'];

        $days = [];
        $today = date('d', time());
        for($i=1; $i<=31; $i++){
            $days[] = $i;
        }

        return view('Test.practic', [
                                            'links'=>$links,
                                            'title'=>$title,
                                            'employees'=>$employees,
                                            'users'=>$users,
                                            'inputs'=>$inputs,
                                            'days'=>$days,
                                            'today'=>$today
                                        ]
        );
    }

    public function form(/*Request $request*/)
    {
        /*$result = '';
        $sum = '';
        if($request->has('text')){
            $result = pow($request->input('text'), 2);
        }
        if($request->has('num1') and $request->has('num2')){
            $sum = $request->input('num1') + $request->input('num2');
        }
        return view('Test.form', ['result'=>$result, 'sum'=>$sum]);*/
        return view('Test.form');
    }

    public function result(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $num3 = $request->input('num3');
        $method = $request->method();
        if($method == 'POST'){
            $method = '!';
        }elseif($method == 'GET'){
            $method = '!!';
        }
        return view('Test.result', ['num1'=>$num1, 'num2'=>$num2, 'num3'=>$num3, 'method'=>$method]);
    }

    public function postGet(Request $request)
    {
        if($request->isMethod('get')){
            return view('Test.form');
        }

        if($request->isMethod('POST')){
            $data = $request->all();
            $num1 = $request->input('num1');
            $num2 = $request->input('num2');

            return view('Test.result', ['num1'=>$num1, 'num2'=>$num2, 'data'=>$data]);
        }
    }

    public function registration(Request $request, $name, $surname)
    {
        if($request->isMethod('get')){
            return view('Test.form');
        }

        if($request->isMethod('post')){
            //$data = $request->except('password', 'email', '_token');
            if($name == 'anton' and $surname == 'yuriv'){
                $data = $request->only('name', 'surname', 'login');
            }else{
                $data = ['wrong'];
            }

            return view('Test.result', ['data'=>$data]);
        }
    }

    public function method(Request $request)
    {
        $path = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();
        $fullUrlWithQuery = $request->fullUrlWithQuery(['page'=>'1']);

        if($request->is('test/method?param=1')){
            return view('Test.method', ['path'=>$path, 'url'=>$url, 'fullUrl'=>$fullUrl, 'fullUrlWithQuery'=>$fullUrlWithQuery]);
        }else{
            return view('Test.about', ['title'=>'asd']);
        }

    }
}
