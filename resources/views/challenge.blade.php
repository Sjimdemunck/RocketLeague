@extends ('app')

@section('title', 'Page Title')

@section('content')
    <title>Challenges </title>

    <h1>Challenge page</h1>
     <img src="https://battlemats.net/wp-content/uploads/2017/11/rocket-league-extended-mouse-pad.jpg" alt="Rocket League"
        style = "float:right;width:420px;height:420px;">
     
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Completed?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($challenges as $challenge)
                    <tr>
                        <td>{{$challenge->title}}</td>
                        <td>{{$challenge->description}}</td>
                        <td>{{$challenge->completed ? 'YES!':'NO!'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>       
@stop
