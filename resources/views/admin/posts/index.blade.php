@extends('layouts.admin')

@section('content')


<h1>Messages</h1>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>

            <th>Patient Id</th>

            <th>Title</th>
            <th>Message</th>

            <th>Created at</th>
            <th>Update</th>
    </thead>
    <tbody>

        @if($posts ?? '')


        @foreach($posts ?? '' as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post['client_id']}}</td>






            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>

            <td>{{$post->created_at->diffForhumans()}}</td>
            <td>{{$post->updated_at->diffForhumans()}}</td>

            <td>{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}


                <div class="form-group">
                    <a data-toggle="tooltip" title="Are you sure? This action will permanently delete the document. ">
                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                </div>
                </a>
                {!! Form::close() !!}
            </td>


        </tr>

        @endforeach

        @endif

    </tbody>
</table>

@endsection