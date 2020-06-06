@extends('layouts.admin')


@section('content')

<h1>Create Document</h1>

{!! Form::open(['method'=> 'POST', 'action'=>'DocumentController@store', 'files'=>true]) !!}
{{csrf_field()}}

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    {!! Form::text('client_id', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    {!! Form::file('file', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('type_id', 'Type:') !!}
    {!! Form::select('type_id', [''=>'Choose Options'] + $types , null, ['class'=>'form-control'])!!}
</div>



<div class="form-group">
    {!! Form::submit('Create Document', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

@include('includes.error-message')




@endsection