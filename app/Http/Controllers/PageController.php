<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    //

    public function home(Request $request){

        $search = $request->search;

        $posts = Post::where('title','LIKE',"%{$search}%")
        ->with('user')
        ->latest()
        ->paginate();


        return view('home',['posts' => $posts]);
    }


    public function blog() {

        $posts = Post::latest()->paginate();

       /*  $posts = [
            ['id' => 1, 'title' => 'Spacex','slug' => 'spcx'],
            ['id' => 2, 'title' => 'Nasa','slug' => 'nasa'],
            ['id' => 3, 'title' => 'Blue Dragon','slug' => 'bd'],
            ['id' => 4, 'title' => 'Virgin Galactic','slug' => 'vg'],
        ]; */

        return view('blog',['posts' => $posts]);
    }

    public function post(Post $post){



        return view('post',['post' => $post]);
    }
}
