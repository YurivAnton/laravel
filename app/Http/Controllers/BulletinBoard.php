<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BulletinBoard extends Controller
{
    public function index(Request $request)
    {
        $bulletins = [];
        $headlines = DB::table('headlines')
            ->select('id', 'name')
            ->get();
        if ($request->has('headline')){
            $bulletins = DB::table('headlines')
                ->leftjoin('bulletinBoard', 'headlines.id', '=', 'bulletinBoard.headline_id')
                ->select('bulletinBoard.name as name', 'bulletinBoard.text as text', 'bulletinBoard.created_at as date', 'headlines.id as headline_id', 'headlines.name as headline_name')
                ->where('headlines.name', '=', $request->get('headline'))
                ->orderBy('bulletinBoard.created_at', 'desc')
                ->get();
        }
        if ($request->has('addNewBulletin')){
            $name = $request->get('name');
            $text = $request->text;
            $headline_id = $request->headline_id;
            $headline_name = $request->headline_name;
            $created_at = $request->date;
            DB::table('bulletinBoard')
                ->insert(['name'=>$name, 'text'=>$text, 'headline_id'=>$headline_id, 'created_at'=>$created_at]);
            return redirect("/bulletinBoard/?headline=$headline_name");
        }
        return view('bulletinBoard.index', ['headlines'=>$headlines, 'bulletins'=>$bulletins]);
    }
}
