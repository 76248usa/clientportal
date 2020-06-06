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
    <!--<h2>Welcome <span>{{$client->name}}</span></h2>
    <br>
    <h3>Documents</h3>
    <p>Feel free to download documents</p>
    <br>

    <div class="container">
        <div class="row-fluid ">
           
            @foreach ( $client->documents as $document)
            <div class="col-sm-4 ">


                <span class="glyphicon glyphicon-paperclip" style="color: #f4511e;
                              font-size: 50px; padding-top: 25px;"></span>
                <div>
                    <h4>{{$document->title}}</h4>
                    <p class="card-text">{{$document->file}}</p>
                    <p><a href="/file/download/{{$document->file}}">Download</a></p>

                    <button type="button" class="btn btn-success"><a href="/files/{{$document->id}}">Full Details</a></button>

                </div>

            </div>
            @endforeach

        </div>-->


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    </head>

    <style>
        body {
            font-family: 'Roboto';
            font-size: 22px;
        }
    </style>



    <body>

        <div class="container">
            <h2>Welcome {{$client->name}}</h2>
            <p>Please check back regularly to stay updated with important lab results, physician messages and lab results.</p>
            <br><br>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-fw fa-home"></i>Documents</a> </li>

                <li><a data-toggle="tab" href="#menu2"><i class="fa fa-fw fa-file-o"></i>Messages</a></li>
                <li><a data-toggle="tab" href="#menu3"><i class="fa fa-fw fa-copy"></i>Lab Results</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                    <h3><i class="fa fa-fw fa-home"></i>Documents</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>



                    <div class="container">
                        <div class="row-fluid ">
                            <!-- my php code which uses x-path to get results from xml query. -->
                            @foreach ( $client->documents as $document)
                            <div class="col-sm-4 ">


                                <span class="glyphicon glyphicon-paperclip" style="color: #f4511e;
                              font-size: 15px; padding-top: 25px;"></span>
                                <div>
                                    <h4>{{$document->title}}</h4>
                                    <p class="card-text">{{$document->file}}</p>

                                    <p><a href="/file/download/{{$document->file}}">Download</a></p>

                                    <button type="button" class="btn btn-success"><a href="/files/{{$document->id}}">Full Details</a></button>

                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>





                </div>

                <div id="menu2" class="tab-pane fade">
                    <h3><i class="fa fa-fw fa-file-o"></i>Messages</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3><i class="fa fa-fw fa-copy"></i>Lab Results</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                    <div class="container">
                        <div class="row-fluid ">
                            <!-- my php code which uses x-path to get results from xml query. -->
                            @foreach ( $client->documents as $document)
                            <div class="col-sm-4 ">


                                <span class="glyphicon glyphicon-paperclip" style="color: #f4511e;
                              font-size: 15px; padding-top: 25px;"></span>
                                <div>
                                    <h4>{{$document->title}}</h4>





                                    <p class="card-text">{{$document->file}}</p>
                                    <p><a href="/file/download/{{$document->file}}">Download</a></p>

                                    <button type="button" class="btn btn-success"><a href="/files/{{$document->id}}">Full Details</a></button>

                                </div>

                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>


</div>

</body>

</html>

@endsection