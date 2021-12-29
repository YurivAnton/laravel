<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function show(Request $request)
    {
        //$request->session()->put('counter', 12);
        $counter = $request->session()->get('counter');
        //$request->session()->forget('counter');
        /*if($request->has('name')){
            $this->validate($request, [
                //'name'=>'required'
                //'name'=>'accepted'
                //'name'=>'after:nextWeek'
                //'name'=>'alpha'
                //'name'=>'between:2,6'
                //'name'=>'boolean'
                //'name'=>'confirmed'
                //'name'=>'date'
                //'name'=>'date_format:Y-m-d'
            ]);
        }else{
            return view('Form.form', ['counter'=>$counter]);
        }*/
        return view('Form.form', ['counter'=>$counter]);
    }
}
