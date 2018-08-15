<?php

namespace MyBlog\Http\Controllers;

use Illuminate\Http\Request;
use MyBlog\Post;
use Carbon\Carbon;
use MyBlog\Http\Requests\PostFormRequest;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    public function index(){

        $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

        $archives = Post::archives();

        return view ('posts.index', compact('posts'));
    }

    public function show(Post $post){

        return view('posts.show', compact('post'));
    }
    
    public function create(){
        
        return view ('posts.create');
    }

    public function store(PostFormRequest $request)
    {

        auth()->user()->publish(new Post(request(['title', 'body'])));

        session()->flash('message', '!!! Successfully Published !!!');
        
        return redirect('/');
    }
}
