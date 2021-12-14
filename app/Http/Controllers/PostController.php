<?php


namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Profile;
use App\City;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function getUser($id)
    {
        //28.1
        //$user = User::find($id);
        //return view('Test.result', ['user'=>$user]);

        //28.2
        //$users = User::all();
        //return view('Test.result', ['users'=>$users]);

        //28.4-28.5
        //$city = City::find(1);
        //return view('Test.result', ['city'=>$city]);

        //28.6
        //$cities = City::all();
        //return view('Test.result', ['cities'=>$cities]);

        //28.7-28.8
        $countries = Country::all();
        return view('Test.result', ['countries'=>$countries]);
    }
    /*25.1*/
    public function getAll(Request $request, $order = 'date', $dir = 'desc')
    {
        $message = $request->session()->get('status');
        $posts = Post::orderBy($order, $dir)->get();
        return view('Test.all', ['posts'=>$posts, 'message'=>$message]);
    }

    public function getOne($id)
    {
        $post = Post::findOrFail($id);
        return view('Test.one', ['post'=>$post]);
    }

    public function newPost(Request $request)
    {
        if ($request->has('title') and $request->has('description') and $request->has('text')){
            $post = new Post;
            $post->title = $request->input('title');
            $post->description = $request->input('description');
            $post->text = $request->input('text');
            $post->date = date('Y-m-d');
            $post->save();
        }else{
            return view('Test.newPost');
        }
    }

    public function update()
    {
        /*$post = Post::find(1);
        $post->title = 'afdlasjfdlaskdfjls';
        $post->description = '111112345342654362264';
        $post->save();*/
        Post::where('id', '<', '5')
            ->where('date', '2021-12-07')
            ->update(['title'=>'????']);
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        if ($request->has('submit')){
            $post->title = $request->title;
            $post->description = $request->description;
            $post->text = $request->text;
            $post->date = $request->date;

            $post->save();
            $request->session()->flash('status', "post id=$id and title=$request->title editing ok");
            return redirect('/post/all/');
        }else{
            return view('Test.editPost', ['post'=>$post]);
        }
    }

    public function delPost(Request $request, $id)
    {
        $post = Post::find($id);
        $request->session()->flash('status', "post title=$post->title delete ok");
        $post->delete();

        return redirect('/post/all/');
    }

    public function getDeletedPost()
    {
        $deletedPost = Post::onlyTrashed()->get();

        return view('Test.deletedPost', ['deletedPost'=>$deletedPost]);
    }

    public function restorePost($id)
    {
        $post = Post::withTrashed()->where('id', $id);
        $post->restore();

        return redirect('/post/deletedPost/');
    }

    /*private $posts;

    public function __construct()
    {
        $this->posts = [
            1 => [
                'title'  => 'Тайтл страницы 1',
                'author' => 'Автор страницы 1',
                'date'   => 'Дата публикации страницы 1',
                'teaser' => 'Короткое описание страницы 1',
                'text'   => 'Полный текст страницы 1',
            ],
            2 => [
                'title'  => 'Тайтл страницы 2',
                'author' => 'Автор страницы 2',
                'date'   => 'Дата публикации страницы 2',
                'teaser' => 'Короткое описание страницы 2',
                'text'   => 'Полный текст страницы 2',
            ],
            3 => [
                'title'  => 'Тайтл страницы 3',
                'author' => 'Автор страницы 3',
                'date'   => 'Дата публикации страницы 3',
                'teaser' => 'Короткое описание страницы 3',
                'text'   => 'Полный текст страницы 3',
            ],
            4 => [
                'title'  => 'Тайтл страницы 4',
                'author' => 'Автор страницы 4',
                'date'   => 'Дата публикации страницы 4',
                'teaser' => 'Короткое описание страницы 4',
                'text'   => 'Полный текст страницы 4',
            ],
            5 => [
                'title'  => 'Тайтл страницы 5',
                'author' => 'Автор страницы 5',
                'date'   => 'Дата публикации страницы 5',
                'teaser' => 'Короткое описание страницы 5',
                'text'   => 'Полный текст страницы 5',
            ],
        ];
    }

    public function showOne($id)
    {
        if(isset($this->posts[$id])){
            return view('Post.showOne', ['post'=>$this->posts[$id]]);
        }else{
            return view('Post.wrong', ['id'=>$id]);
        }
    }

    public function showAll()
    {
        return view('Post.showAll', ['posts'=>$this->posts]);
    }*/
}
