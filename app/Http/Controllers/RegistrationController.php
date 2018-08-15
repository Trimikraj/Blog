<?php

namespace MyBlog\Http\Controllers;

use MyBlog\User;
use Mail;
use MyBlog\Mail\Welcome;
use MyBlog\Http\Requests\RegistrationFormRequest;

class RegistrationController extends Controller
{
    public function create()
    {
        if (auth()->check())
        {
            return back();
        }
        return view('registrations.create');
    }

    public function store(RegistrationFormRequest $request)
    {
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        auth()->login($user);

        session()->flash('message', '!!! Successfully  Registered !!!');

        \Mail::to($user)->send(new Welcome($user));

        return redirect()->home();
    }
}
