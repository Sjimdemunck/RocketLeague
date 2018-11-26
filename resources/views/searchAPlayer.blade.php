@extends ('app')

@section('title', ' Search a player')

@section('content')

    <h1> Search a player! </h1>
        <div>
            <p> Type a username below: </p>
        </div>

    <form method="POST" action="/search-a-player-results" role="search">
        {{csrf_field()}}
        <div class="input-group">
            <input type="text" class="form-control" name="searchPlayer" placeholder="Search a player!"> 
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search">
                    </span>
                </button>
            </span>
        </div>

        <div class="container">
            @if(isset($users))
                <p> The search results for your query <b> {{ $searchPlayer }} </b> are :</p>
            <h2>User Details</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
            <p> {{ $message}} </p>
            @endif
        </div>

@stop


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Challenges</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Zoek-een-speler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<title>Zoek een speler </title>
zoek-een-speler page
<div class="jumbotron">
        <h1 class="test">Rocket League</h1>
            <p class="lead">RocketLeague RocketLeague RocketLeague RocketLeague RocketLeague.</p>
            <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button"> Login</a>
            <!-- <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button"> Register;</a>
      </div>
-->

