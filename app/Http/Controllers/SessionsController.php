<?php

namespace App\Http\Controllers;

use App\User;

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

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
