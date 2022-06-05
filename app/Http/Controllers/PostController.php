<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index',[
        'posts' => Post::latest()->paginate(),
    ]);
    }


    public function create(Post $post)
    {
        return view('posts.create',['post' => $post]);
    }



    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'label' => 'required',
            'slug' => 'required|unique:posts,slug',
            'content' => 'required',
        ]);


        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'label' => $request->label,
            'slug' => $request->slug,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.index',$post);
    }

    public function edit(Post $post)
    {

        return view('posts.edit',['post' => $post]);

    }

    public function update(Request $request,Post $post)
    {

        $request->validate([
            'title' => 'required',
            'label' => 'label',
            'slug'=>'required|unique:posts,slug,'. $post->id,
            'content' => 'required',
        ]);


        $post->update([
            'title' => $request->title,
            'label' => $request->label,
            'slug' => $request->slug,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.edit',$post);
    }





    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }


}
