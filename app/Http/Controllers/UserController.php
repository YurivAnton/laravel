<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->paginate(10);

        return view('Test.result', ['users'=>$users]);
    }
}
