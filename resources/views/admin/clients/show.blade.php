@extends('layouts.app')
@section('content')
<style>
    .logo-small {
        color: #f4511e;
        font-size: 50px;
    }

    .logo {
        color: #f4511e;
        font-size: 200px;
    }
</style>
@if($client)
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container-fluid text-center">



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Client Portal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>




        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    </head>

    <style>
        body {
            font-family: 'Roboto';
            font-size: 22px;

            background-image: url("https://unsplash.com/photos/747NDboAWNY");
            background-repeat: no-repeat;
            background-size: auto;
        }
    </style>



    <body>


        @if($client)
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>

        <body>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h2>Welcome <span style="color: #f4511e;">{{$client->name}}</span></h2>
                    <p>Please check back regularly to stay updated with important lab results,
                        physician messages and lab results.</p>
                </div>
            </div>

            <div class="container-fluid">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Invoices</a></li>
                    <li><a data-toggle="tab" href="#menu1">Receipts</a></li>
                    <li>



                    </li>
                    <li><a data-toggle="tab" href="#menu2">Lab Results</a></li>
                    <li><a data-toggle="tab" href="#menu3">Messages</a>

                        <span class="badge badge-warning">
                            <?php
                            $posts = DB::table('posts')
                                ->where('status', '=', 1)
                                ->where('client_id', '=', Auth::user()->id)

                                ->count();

                            echo $posts;

                            ?>
                        </span>
                    </li>
                </ul>


                <div class="tab-content">

                    <div id="home" class="tab-pane fade in active">

                        <h4>INVOICES</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class=" col-sm-4 " style="background-color: #E8E8E8 !important;">
                            @foreach ($client->documents as $client)
                            @if ($client->type->name == 'invoice')

                            <span class=" glyphicon glyphicon-paperclip" style="color: #f4511e;
font-size: 15px;
        padding-top: 25px;

        "></span>

                            <h4> {{$client->title}}

                            </h4>
                            <p class="card-text"> {{$client->file}}


                            </p>
                            <p><a href="/file/download/{{$client->file}}">Download</a></p><button type="button" class="btn btn-success"><a href="/files/{{$client->id}}">Full Details</a></button>
                            <p> </p>

                            @endif
                            @endforeach
                        </div>
                    </div>



                    <div id="menu1" class="tab-pane fade">
                        <h4>RECEIPTS</h4>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        @foreach ($client->documents as $client)
                        @if ($client->type->name == 'receipt')

                        <div class="col-sm-4 " style="background-color: #E0E0E0"><span class="glyphicon glyphicon-paperclip" style="color: #f4511e;
font-size: 15px;
        padding-top: 25px;

        "></span>

                            <h4> {{$client->title}}

                            </h4>
                            <p class="card-text"> {{$client->file}}


                            </p>
                            <p><a href="/file/download/{{$client->file}}">Download</a></p><button type="button" class="btn btn-success"><a href="/files/{{$client->id}}">Full Details</a></button>
                            <p> </p>
                        </div>
                        @endif
                        @endforeach
                    </div>












                    <div id="menu2" class="tab-pane fade">
                        <h4>LAB RESULTS</h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        @foreach ($client->documents as $client)
                        @if ($client->type->name == 'lab')
                        <div class="col-sm-4 "><span class="glyphicon glyphicon-paperclip" style="color: #f4511e;
font-size: 15px;
        padding-top: 25px;

        "></span>

                            <h4> {{$client->title}}

                            </h4>
                            <p class="card-text"> {{$client->file}}


                            </p>
                            <p><a href="/file/download/{{$client->file}}">Download</a></p><button type="button" class="btn btn-success"><a href="/files/{{$client->id}}">Full Details</a></button>
                        </div>
                        @endif
                        @endforeach
                    </div>


                    <div id="menu3" class="tab-pane fade ">
                        <h4>MESSAGES</h4>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                        @foreach($client->posts as $post)
                        <div class="col-sm-4 secondclass"><span class="glyphicon glyphicon-paperclip" style="color: #f4511e; font-size: 15px; padding-top: 25px; "></span>


                            <h4> {{$post->title}}

                            </h4>
                            <h5>{{$post->body}}</h5>


                            <div class=" card-text">



                                <div class="well">
                                    <p>Would you like to send a comment?</p>

                                    {!! Form::open(['method'=>'POST', 'action'=>'PostCommentsController@store']) !!}
                                    <div class="form-group">

                                        <input type="hidden" name="post_id" value="{{$post->id}}">


                                        {!! Form::label('body', 'Comment:') !!}
                                        {!! Form::textarea('body', null, ['class' => 'form-control','maxlength' => 400, 'placeholder' => 'Not more than 400 characters', 'rows' => 5]) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Send Comment', ['class'=>'btn btn-primary']) !!}
                                    </div>



                                    {!! Form::close() !!}
                                </div>
                            </div>

                            <!--<form role="form">
                                    <div class="form-goup">
                                        <textarea class="form-control" rows='4'></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>-->
                        </div>

                        @endforeach

                    </div>



                </div>

            </div>
</div>


</body>

</html>

@endif
@endif
@endsection