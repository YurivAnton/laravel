<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GuestBoard extends Controller
{
    public function index(Request $request)
    {
        $message = $request->session()->get('status');
        $posts = DB::table('guestBook')
            ->latest()
            ->get();
        return view('GuestBoard.index', ['posts'=>$posts, 'message'=>$message]);
    }

    public function add(Request $request)
    {
        $name = $request->input('name');
        $text = $request->input('text');

        if ($request->has('submit')){
            $created_at = date('Y-m-d H:i:s');
            DB::table('guestBook')
                ->insert(['name'=>$name, 'text'=>$text, 'created_at'=>$created_at]);
            return redirect('/guestBoard')->with('status', 'сообщение успешно сохранено.');
        }

        if ($request->has('update')){
            $updated_at = date('Y-m-d H:i:s');
            DB::table('guestBook')
                ->where('id', $request->input('id'))
                ->update(['name'=>$name, 'text'=>$text, 'updated_at'=>$updated_at]);
            return redirect('/guestBoard/moderator')->with('status', 'сообщение успешно сохранено.');
        }
    }

    public function moderator(Request $request)
    {
        $posts = DB::table('guestBook')->latest()->get();
        $message = '';
        if($request->has('deleteId')){
            $id = $request->deleteId;
            DB::table('guestBook')
                ->where('id', $id)
                ->delete();
            return redirect('/guestBoard/moderator')->with('status', 'сообщение успешно deleting.');
        }

        if ($request->has('editId')){
            $id = $request->editId;
            foreach($posts as $post) {
                if($post->id == $id){
                    $editPost = $post;
                }
            }
            $request->session()->flash('status', 'сообщение успешно editing.');
            return view('GuestBoard.edit', ['editPost'=>$editPost, 'message'=>$message]);
        }
        return view('GuestBoard.moderator', ['posts'=>$posts, 'message'=>$message]);
    }
}
