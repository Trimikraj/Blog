<?php

namespace MyBlog\Http\Controllers;

use MyBlog\User;

class SessionsController extends Controller
{

    public function __construcu()
    {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        if (auth()->check())
        {
            return back();
        }

        return view('sessions.create');
    }

    public function store()
    {

        if (! auth()->attempt(request(['email', 'password'])) )
        {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        session()->flash('message', '!!! Successfully Signed In !!!');

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        session()->flash('message', '!!! Successfully Signed Out !!!');

        return redirect()->home();
    }
}
