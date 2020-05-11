@extends('layouts.admin')

@section('content')

<div class="container">
    <h2>Client Posts</h2>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
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
                <td><a href="{{route('posts.edit', $data->id)}}">{{$data->title}}</a></td>
                <td>{{$data->body}}</td>
                <td><a href="/files/{{$data->id}}">View</a></td>
                <td><a href="/file/download/{{$data->file}}">Download</a></td>

            </tr>
            @endforeach


        </tbody>
    </table>
</div>







<div class="container">
    <h2>Client Posts</h2>
    <p>Files can be viewed or downloaded</p>
    <table border="1">
        <tr>
            <th>Post Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>View</th>
            <th>Download</th>
        </tr>

        @foreach($file as $key=>$data)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->body}}</td>
            <td><a href="/files/{{$data->id}}">View</a></td>
            <td><a href="/file/download/{{$data->file}}">Download</a></td>
        </tr>

        @endforeach
    </table>

</div>



</body>

</html>










@endsection