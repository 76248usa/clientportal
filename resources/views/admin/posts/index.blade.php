@extends('layouts.admin')

@section('content')

<h1>Posts</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Post Title</th>
            <th>Body</th>
            <th>Image</th>
        </tr>
    </thead>

    <tbody>
        @if($posts)
        @foreach($posts as $post)


        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</a></td>
            <td>{{$post->body}}</td>
            <td>{{$post->photo_name}}</td>
            <td><a href="/download" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download Brochure </a></td>
            <td><img style=width:20% src="/storage/photo_name/{{$post->photo_name}}"></td>



        </tr>




        @endforeach
        @endif

        @endsection