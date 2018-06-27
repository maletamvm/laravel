<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createForm(){
        return view('layouts.create');
    }

    public function addPost(Request $request){

        $post = (new Posts());
        $post->fill($request->all());
        $post->save();

        return redirect('/');
    }
    public function delete($post)
    {
        \DB::delete('delete from posts where id = ?', [$post]);

        return redirect('/');
    }

    public  function  show(){
        $posts = \DB::table('posts')->get();
        return view('main', compact('posts'));
    }

    public  function  update(Request $request){
        $post = (new Posts())->find($request->route('id'));
        $post->fill($request->all());
        $post->update();

        return redirect('/');
    }
    public function editForm(Posts $post)
    {
        return view('layouts.edit', compact('post'));
    }

}
