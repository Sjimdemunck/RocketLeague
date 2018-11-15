<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions_create');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) 
        {
            return back()->withErrors([
                'WrongCombination' => 'This username and password combination is not eligble, please try again!'
            ]);
        }
        return redirect()->to('/login');
    }
    
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}