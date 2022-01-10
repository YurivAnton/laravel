<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');

        //$users = [1,2];
        return view('user.index', ['users' => $users]);
    }
}
