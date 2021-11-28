<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    /*public function sum($num1, $num2)
    {
        return $num1 + $num2;
    }*/

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
    /*public function show()
    {
        $arr = [9, 144, 625, 16, 2, 25];
        $str = ['aaaaa', 'bbbb', 'cccccc'];
        $data = [12, 2];
        $arr5 = [];
        $title = 'Show';

        for ($i = 1; $i <= 25; $i++) {
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

        return view('Test.show', ['arr' => $arr,
            'str' => $str,
            'data' => $data,
            'arr5' => $arr5,
            'employees' => $employees,
            'title' => $title
        ]);
    }*/

    /*public function home()
    {
        $title = 'Home';
        return view('Test.home', ['title'=>$title]);
    }*/

    /*public function contact()
    {
        $title = 'Contact';
        return view('Test.contact', ['title' => $title]);
    }*/

    /*public function about()
    {
        $title = 'About';
        return view('Test.about', ['title' => $title]);
    }*/

    /*public function practic()
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
        for ($i = 1; $i <= 31; $i++) {
            $days[] = $i;
        }

        return view('Test.practic', [
                'links' => $links,
                'title' => $title,
                'employees' => $employees,
                'users' => $users,
                'inputs' => $inputs,
                'days' => $days,
                'today' => $today
            ]
        );
    }*/

    /*public function form(Request $request)
    {
        $result = '';
        $sum = '';
        if($request->has('text')){
            $result = pow($request->input('text'), 2);
        }
        if($request->has('num1') and $request->has('num2')){
            $sum = $request->input('num1') + $request->input('num2');
        }
        return view('Test.form', ['result'=>$result, 'sum'=>$sum]);
        return view('Test.form');
    }*/

    /*public function result(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $num3 = $request->input('num3');
        $method = $request->method();
        if ($method == 'POST') {
            $method = '!';
        } elseif ($method == 'GET') {
            $method = '!!';
        }
        return view('Test.result', ['num1' => $num1, 'num2' => $num2, 'num3' => $num3, 'method' => $method]);
    }*/

    /*public function postGet(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Test.form');
        }

        if ($request->isMethod('POST')) {
            $data = $request->all();
            $num1 = $request->input('num1');
            $num2 = $request->input('num2');

            return view('Test.result', ['num1' => $num1, 'num2' => $num2, 'data' => $data]);
        }
    }*/

    /*public function registration(Request $request, $name, $surname)
    {
        if ($request->isMethod('get')) {
            return view('Test.form');
        }

        if ($request->isMethod('post')) {
            //$data = $request->except('password', 'email', '_token');
            if ($name == 'anton' and $surname == 'yuriv') {
                $data = $request->only('name', 'surname', 'login');
            } else {
                $data = ['wrong'];
            }

            return view('Test.result', ['data' => $data]);
        }
    }*/

    /*public function method(Request $request)
    {
        $path = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();
        $fullUrlWithQuery = $request->fullUrlWithQuery(['page' => '1']);

        if ($request->is('test/method?param=1')) {
            return view('Test.method', ['path' => $path, 'url' => $url, 'fullUrl' => $fullUrl, 'fullUrlWithQuery' => $fullUrlWithQuery]);
        } else {
            return view('Test.about', ['title' => 'asd']);
        }

    }*/

    /*public function sessionPut(Request $request)
    {
        $request->session()->put('test', '1');
        return view('Test.home', ['title' => 'ttt']);
    }*/

    /*public function sessionGet(Request $request)
    {
        $session = $request->session()->get('test');
        $request->session()->put('test', $session + 1);
        return view('Test.about', ['title' => 'ttt', 'session' => $session]);
    }*/

    /*public function home(Request $request)
    {
        $request->session()->forget('arr');

        $title = 'HOME';
        $time = $request->session()->get('time');
        if (empty($time)) {
            $time = $request->session()->put('time', date('H:i:s'));
        }
        //$request->session()->put('arr', [1, 2, 3]);
        $arr = $request->session()->get('arr');
        //$request->session()->push('arr', 4);
        $arr1 = $request->session()->get('arr');

        return view('Test.home', ['title' => $title, 'time' => $time, 'arr' => $arr, 'arr1' => $arr1]);
    }*/

    /*public function method1(Request $request)
    {
        $request->session()->put('var', 'hello');
    }*/

    /*public function method2(Request $request)
    {
        $title = 'title';
        $value = $request->session()->pull('var');

        return view('Test.about', ['value' => $value, 'title' => $title]);
    }*/

    /*public function sessionFlush(Request $request)
    {
        $request->session()->flush();
    }*/

    /*public function all(Request $request)
    {
        $sessionAll = $request->session()->all();
        $title = 'sessionAll';

        return view('Test.contact', ['title' => $title, 'sessionAll' => $sessionAll]);
    }*/

    /*public function sessionHas(Request $request)
    {
        if ($request->session()->has('test')) {
            $sessionHas = $request->session()->get('test');
        } else {
            $sessionHas = $request->session()->put('test', date('H:i:s'));
        }

        return view('Test.home', ['sessionHas' => $sessionHas]);
    }*/

    /*public function session()
    {
        session(['key' => 'value']);
        $value = session('key');

        return view('Test.home', ['value' => $value]);
    }*/

    /*public function redirect(Request $request)
    {
        $num = $request->input('num');
        $email = $request->input('email');
        $message = '';

        if(isset($num)) {
            if ($num >= 1 and $num <= 10) {
                return redirect('/test/redirect2/');
            } else {
                $message = 'введено некорректное число';
            }
        }
        return view('Test.form', ['message' => $message]);
    }

    public function redirect2()
    {
        return view('Test.result');
    }*/

    //15
    /*public function redirect(Request $request)
    {
        $message = '';
        if ($request->has('email')) {
            $email = $request->input('email');
            if (preg_match('#^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,3}$#', $email)) {
                //return redirect('test/redirect2')->withInput();
                //15.3 return redirect()->route('red')->withInput();

            }else{
                $message = 'сообщение о некорректности ввода';
                return view('Test.form', ['message' => $message]);
            }
        }else{
            return view('Test.form', ['message' => $message]);
        }
    }

    public function redirect2(Request $request)
    {
        $email = $request->old('email');
        return view('Test.result', ['email'=>$email]);
    }


    public function red(Request $request)
    {
        return redirect()->route('result', ['param1'=>'1', 'param2'=>'2']);
    }
    public function result(Request $request, $param1, $param2)
    {
        return $param1.' '.$param2;
    }*/

    //16
    /*public function flash(Request $request)
    {
        //$request->session()->flash('test', 'its work!');
        if($request->has('num1') and $request->has('num2') and $request->has('num3') and
            $request->has('num4') and $request->has('num5')){
            $request->flash();
            //return redirect('/test/result/')->withInput();
            return view('Test.form');
        }else{
            $request->flash();
            return view('Test.form');
        }
    }

    public function result(Request $request)
    {
        return $request->old('num1') + $request->old('num2') + $request->old('num3') +
                 $request->old('num4') + $request->old('num5');
    }*/

    //17
    /*public function response()
    {
        return response('Hello world', 200)->header('Content-Type', 'text/plain');
    }*/

    //18 cookie
    public function cookie(Request $request)
    {
        //18.1
        /*if (empty(Cookie::get('time'))) {
            Cookie::queue('time', time(), 3);
        }else{
            $result = time() - Cookie::get('time');
            if ($result >= 0 and $result <=60) {
                return $result.' sec';
            }elseif($result > 60 and $result <= 3600){
                return floor($result/60).' min '.($result %= 60).' sec';
            }
        }*/
        //18.2
        /*$message = '';
        if ($request->has('birthday')){
            $birthday = $request->input('birthday');
            if (preg_match('#\d{4}-\d{2}-\d{2}#', $birthday)) {
                //Cookie::queue('birthday', $birthday, 2);
                $yearsOld = explode('-', $birthday);
                if (date('m') == $yearsOld[1] and date('d') == $yearsOld[2]){
                    $message = 'vitayu z D N vam '.(date('Y') - $yearsOld[0]).' rokiv';
                    $cookie = Cookie::queue('message', $message, 2);
                    return view('Test.form', ['message'=>$cookie]);
                }
            }else{
                $message = 'nepravelny format(yyyy-mm-dd)';
                return view('Test.form', ['message'=>$message]);
            }
        }else{
            return view('Test.form', ['message'=>$message]);
        }*/

        //18.3
        /*if (empty(Cookie::get('counter'))){
            Cookie::queue('counter', 1, 2);
        }else{
            $counter = Cookie::get('counter') + 1;
            Cookie::queue('counter', $counter, 2);
        }
        return view('Test.form');*/
    }

    //20.1-20.5
    /*public function select()
    {
        $users = DB::select('select * from users where age > 333');

        return view('Test.result', ['users' => $users]);
    }

    public function insert($name, $surname, $age)
    {
        DB::insert('insert into users (name, surname, age) values(?, ?, ?)', [$name, $surname, $age]);
    }

    public function delete($id)
    {
        DB::delete('delete from users where id = ?', [$id]);
    }

    public function update($id, $age)
    {
        DB::update("update users set age = $age where id = ?", [$id]);
    }*/

    //21
    public function allEmployees()
    {
        /*$employees = DB::table('employees')->get();
        return view('Test.result', ['employees'=>$employees]);*/
        $employees = DB::table('employees')->select('name', 'salary')->get();
        return view('Test.result', ['employees'=>$employees]);
    }

    public function where()
    {
        //21.4
        //$employees = DB::table('employees')->where('salary', '=', 500)->get();
        //21.5
        //$employees = DB::table('employees')->where('salary', '>', 450)->get();
        //21.6
        $employees = DB::table('employees')->where('salary', '!=', 500)->get();
        return view('Test.result', ['employees'=>$employees]);
    }

    public function orWhere()
    {
        //21.7
        //$employees = DB::table('employees')->where('salary', 400)
          //                                      ->orWhere('id', '>', 4)->get();
        //21.8
        //$employees = DB::table('employees')->where('id', 3)->first();
        //21.9
        $employees = DB::table('employees')->where('id', 5)->value('name');
        return view('Test.result', ['employees'=>$employees]);
    }

    public function pluck()
    {
        //21.10
        $employees = DB::table('employees')->pluck('name');
        return view('Test.result', ['employees'=>$employees]);
    }

    public function whereBetween()
    {
        //21.11
        //$employees = DB::table('employees')->whereBetween('salary', [450, 1100])->get();
        //21.12
        //$employees = DB::table('employees')->whereNotBetween('salary', [300, 600])->get();
        //21.13
        //$employees = DB::table('employees')->whereIn('id', [1, 2, 3, 5])->get();
        //21.14
        //$employees = DB::table('employees')->whereNotIn('id', [1, 2, 3])->get();
        //21.15
        //$employees = DB::table('employees')->where(function ($query){
        //        $query->whereIn('id', [1,2,3])
        //                ->whereBetween('salary', [400, 800]);
        //    })->get();
        //21.16
        $employees = DB::table('employees')->whereSalaryOrPosition(500, 'Program')->first();
        return view('Test.result', ['employees'=>$employees]);
    }
}
