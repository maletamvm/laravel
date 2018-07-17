<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Dashboard\Controller;
use App\Http\Requests\StoreBlogPost;
use App\Post;
use Illuminate\Http\Request;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * @param StoreBlogPost $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBlogPost $request)
    {

        $post = (new Post());
        $post->fill($request->all());
        $path = $request->file('image')->store('images', 'public');
        $post->image = $path;
        $post->user_id = \Auth::id();
        $post->save();
        return redirect()->route('home');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        Post::destroy($id);

        return redirect()->route('home');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $post = Post::find($request->route('id'));
        $post->fill($request->all());
        $post->update();

        return redirect()->route('home');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', compact('post'));
    }

}
