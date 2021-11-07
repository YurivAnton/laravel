<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

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
        $arr = [9, 144, 625, 16];
        $str = ['aaaaa', 'bbbb', 'cccccc'];
        $data = [12, 2];
        $arr5 = [];
        for ($i = 1; $i <= 25; $i++)
        {
            $arr5[] = $i;
        }

        return view('Test.show', ['arr'=>$arr, 'str'=>$str, 'data'=>$data, 'arr5'=>$arr5]);
    }
}
