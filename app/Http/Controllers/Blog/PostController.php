<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Dashboard\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all();
        return view('main', compact('posts'));
    }

}
