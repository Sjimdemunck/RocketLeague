<!doctype html>
<html>
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="/css/app.css"></link>
        <title>RocketLeague - @yield('title')</title>
    </head>
    <body>

      <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
      
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/challenge">Challenges</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/search-a-player">Search a player</a>
          </li>
        </ul>
      </nav>

      <div class="container">
        @yield('content')
      </div>
    </body>
</html>