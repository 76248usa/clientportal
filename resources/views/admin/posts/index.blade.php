@extends('layouts.admin')

@section('content')


<h1>Messages</h1>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Physician</th>

            <th>Patient Name</th>

            <th>Title</th>
            <th>Message</th>

            <th>Created at</th>

            <th>Patient Comments</th>
    </thead>
    <tbody>

        @if($posts ?? '')


        @foreach($posts ?? '' as $post)

        <tr>
            <td>{{$post->id}}</td>

            <td>{{Auth::user()->name}}</td>

            <td>{{$post->client->name}}</td>


            <td>{{$post->title}}</td>
            <!--<td>{{$post->body}}</td>-->

            <td><a href="#" data-toggle="tooltip" title="{{ $post->body }} "> {{\Illuminate\Support\Str::limit($post->body, $limit = 10, $end = '...') }}</a></td>


            <td>{{$post->created_at->diffForhumans()}}</td>


            @foreach($post->comments as $comment)

            <td><a href="#" data-toggle="tooltip" title="{{ $comment->body }} "> {{\Illuminate\Support\Str::limit($comment->body, $limit = 10, $end = '...') }}</a></td>


            @endforeach



            <td>{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}


                <div class="form-group">
                    <a data-toggle="tooltip" title="Are you sure? This action will permanently delete the document. ">
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                </div>
                </a>
                {!! Form::close() !!}
            </td>






            @endforeach

            @endif

    </tbody>
</table>

@endsection