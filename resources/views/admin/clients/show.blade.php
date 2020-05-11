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
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-paperclip" style="color: #f4511e;
        font-size: 50px;"></span>
            <h4>{{$client->document->title}}</h4>
            <p>{{$client->document->file}}</p>
            <p><a href="/file/download/{{$client->document->file}}">Download</a></p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-folder-open logo-small" style="color: #f4511e;
        font-size: 50px;"></span>
            <h4>LOVE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-book logo-small" style="color: #f4511e;
        font-size: 50px;"></span>
            <h4>JOB DONE</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small" style="color: #f4511e;
        font-size: 50px;"></span>
            <h4>GREEN</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small" style="color: #f4511e;
        font-size: 50px;"></span>
            <h4>CERTIFIED</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small" style="color: #f4511e;
        font-size: 50px;"></span>
            <h4>HARD WORK</h4>
            <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
</div>
@endif


@endsection