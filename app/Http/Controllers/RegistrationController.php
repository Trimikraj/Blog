<?php

namespace App\Http\Controllers;

use App\User;

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

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required | string | min:3 | max:50',
            'email' => 'required | string | email | max:50 | unique:users',
            'password' => 'required | string | min:6 | max:50 | confirmed'
        ]);

        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        auth()->login($user);

        return redirect()->home();
    }
}
