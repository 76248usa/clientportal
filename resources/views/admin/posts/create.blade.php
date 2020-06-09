@extends('layouts.admin')

@section('content')
<h1>Create Post</h1>

{!! Form::open(['method'=> 'POST', 'action'=>'AdminPostsController@store', 'files'=>true, 'enctype' => 'multipart/form-data']) !!}
{{csrf_field()}}

<div class="form-group">
    {!! Form::label('client_id', 'Client:') !!}
    {!! Form::select('client_id', [''=>'Choose Client'] + $clients, null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control'])!!}
</div>


<div class="form-group">
    {!! Form::label('body', 'Elysian Notes:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'rows'=>10])!!}
</div>


<div class="form-group">
    {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

@include('includes.error-message')

@endsection