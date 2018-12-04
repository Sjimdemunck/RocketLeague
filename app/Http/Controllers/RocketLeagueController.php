<?php

namespace App\Http\Controllers;

use App\User;
use App\Challenge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RocketLeagueController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function challenge()
    {

        $challenges = Challenge::all();

         return view ('challenge', compact('challenges', 'klaas'));
    }

    public function searchPlayer()
    {
        return view('searchAPlayer');
    }

    public function searchAPlayer()
    {
        $searchPlayer = Input::get('searchPlayer');

        if ($searchPlayer) {
            $users = User::where('name','LIKE','%'.$searchPlayer.'%')->orWhere('email','LIKE','%'.$searchPlayer.'%')->get();

            if ($users->count()) {
                return view('searchAPlayer', compact('users', 'searchPlayer'));
            } else {
                $message = "No user found. Try to search again !";

                return view ('SearchAPlayer', compact('message'));
            }

        }
        $message = "No user found. Try to search again !";
        return view ('SearchAPlayer', compact('message'));
    }

    public function default()
    {
        return view('default');
    }

    public function create()
    {
        return view('register');
    }

    public function store()
    {
        $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'phone' => 'required'
            ]);
            
        $user = User::create(request(['name', 'email', 'password', 'phone']));
            auth()->login($user);
            
        return redirect()->to('/register');
    }
}

    
