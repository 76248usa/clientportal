@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3 col-md-2">

        </div>
        <div class="col-sm-9 col-md-8">
            <h3>View Document</h3><br>
            <h4>{{$data->title}}</h4>
            <p>{{$data->body}}</p>
            <p><a href="/file/download/{{$data->file}}">Download</p><br>

            <iframe src="{{url('storage/' . $data->file)}}" style="width: 600px; height: 500px;"></iframe>
            </p>
        </div>
        <div class="col-sm-3 col-md-2">

        </div>
    </div>
</div>





@endsection