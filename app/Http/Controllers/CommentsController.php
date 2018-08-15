<?php

namespace MyBlog\Http\Controllers;

use MyBlog\Comment;
use MyBlog\Post;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post)
    {

        $this->validate(request(), [ 'body' => 'required | min:2']);
       
        $post->addComment(request('body'));

        session()->flash('message', '!!!! Successfully Commented !!!');

        return back();
    }
}
