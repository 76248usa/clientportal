@extends('app.blade')

@section('content')
​
<title>Create Document</title>

<div class="container">
    <h2>Striped Rows</h2>
    <p>The .table-striped class adds zebra-stripes to a table:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>sl</th>
                <th>Title</th>
                <th>Description</th>
                <th>View</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>

            @foreach($file as $key=>$data)
            <tr>
                <td>{{++$key}}</td>
                <td></td>{{$data->title}}td>
                <td>{{$data->description}}</td>
                <td><a href="/files/{{$data->id}}">View</a></td>
                <td><a href="/file/download/{{$data->file}}">Download</a></td>

            </tr>
            @endforeach


        </tbody>
    </table>
</div>




<table border="1">
    <tr>
        <th>s1</th>
        <th>Title</th>
        <th>Description</th>
        <th>View</th>
        <th>Download</th>

    </tr>

    @foreach($file as $key=>$data)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td><a href="/files/{{$data->id}}">View</a></td>
        <td><a href="/file/download/{{$data->file}}">Download</a></td>

    </tr>

    @endforeach
</table>

@endsection