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
            <!--
            <br> <li> {{ $challenge->title}} </li> <br>
            <b> What do I need to do for this challenge? </b> <br> {{ $challenge->description}} <br>
            <b> Is this challenge completed? </b> <br> 
            {{ $challenge->completed }} <br> -->
        </div>

<!--    if($challenge == 1) 
                $challenge = "Yes";
                else
                $challenge = "No";
                                            HOE KRIJG IK DIT IN DE blade extensie! (BOOLEAN naar yes or no)

                                            Inserten in een tabel (view) 
-->
       

@stop
