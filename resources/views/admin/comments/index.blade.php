@extends('layouts.app')

@section('content')
<h1>Comments</h1>

@foreach($comments as $comment)
<p>{{$comment->body}}</p>
@endforeach

@endsection