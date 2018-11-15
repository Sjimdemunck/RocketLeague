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

         /*
         foreach ($challenges as $challenge)
         {
             echo $challenge->description;
         }
         dit kan ook op een simpeler manier achter de view.
        */

         return view ('challenge', compact('challenges'));
    }

    public function searchPlayer()
    {
        return view('searchAPlayer');
    }

    public function searchAPlayer()
    {
        $searchPlayer = Input::get ('searchPlayer');
        if($searchPlayer !="")
        {
            $user = User::where('name','LIKE','%'.$searchPlayer.'%')->orWhere('email','LIKE','%'.$searchPlayer.'%')->get();

            if(count($user) > 0)
                return view('searchAPlayer')->withDetails($user)->withSearchPlayer ($searchPlayer);

                else return view ('SearchAPlayer')->withMessage('No user found. Try to search again !');
        }
        return view ('SearchAPlayer')->withMessage('No user found. Try to search again !');
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
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/register');
    }
}

    
