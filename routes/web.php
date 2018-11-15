<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\RocketLeagueController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
    GET     /challenge  (index)     voor overzicht challenges
    POST    /register   (store)     sla nieuwe gebruiker op
    PATCH/PUT   /challenge  (update)    update challenges
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
    DELETE  /challenge  (destroy)   verwijder een challenge
*/

Route::get('/', 'RocketLeagueController@home');
Route::get('/challenge', 'RocketLeagueController@challenge');
Route::get('/search-a-player', 'RocketLeagueController@searchPlayer');

Route::get ('/default', 'RocketLeagueController@default');


Route::post ('/register', 'RocketLeagueController@store');
Route::get ('/register', 'RocketLeagueController@create');

Route::get ('/login', 'SessionController@create');
Route::post('login', 'SessionController@store');

Route::post('/search-a-player-results', 'RocketLeagueController@searchAPlayer');
Route::get('/search-a-player', 'RocketLeagueController@searchPlayer');
/* Route::get ('/login', 'Sessionontroller@destroy'); */

//Route::Post(/{id});
//Route::Get();



#
#Route::get('/', function () {
#    return view('welcome');
#});
#