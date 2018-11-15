@extends ('app')

@section('title', 'Page Title')

@section('content')

<title> Home Page </title>
    <h1>RocketLeague</h1>

    <div>
        This is the homepage of RocketLeague Challenges!
        Feel free to sign up and get some challenges done!!
    </div>

    <div>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Sign up! </a>
        <a class="btn btn-secondary btn-lg" href="/login" role="button">Login </a>
    </div>
        
@stop
