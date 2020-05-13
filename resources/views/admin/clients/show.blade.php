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
    <h2>Welcome <span>{{$client->name}}</span></h2>
    <br>
    <h3>Documents</h3>
    <p>Feel free to download documents</p>
    <br>

    <div class="container">
        <div class="row-fluid ">
            <!-- my php code which uses x-path to get results from xml query. -->
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
        </div>
    </div>
    <!--contain

        @endif
        @endsection