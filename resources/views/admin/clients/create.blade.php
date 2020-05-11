@extends('layouts.admin')

@section('content')
<h1>Create Client Page</h1>

{!! Form::open(['method'=> 'POST', 'action'=>'ClientController@store', 'files'=>true]) !!}
{{csrf_field()}}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('document_id', 'Document:') !!}
    {!! Form::select('document_id', [''=>'Choose Documents'] + $documents, null, ['class'=>'form-control'])!!}
</div>





<div class="form-group">
    {!! Form::submit('Create Client', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

@include('includes.error-message')

@endsection