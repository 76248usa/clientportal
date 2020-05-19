@extends('layouts.admin')

@section('content')
<h1>Edit Client Page</h1>

{!! Form::model($client, ['method'=> 'PATCH', 'action'=>['ClientController@update', $client->id] , 'files'=>true]) !!}
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
    {!! Form::label('document_id2', 'Document:') !!}
    {!! Form::select('document_id2', [''=>'Choose Documents'] + $documents, null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('document_id3', 'Document:') !!}
    {!! Form::select('document_id3', [''=>'Choose Documents'] + $documents, null, ['class'=>'form-control'])!!}
</div>


<div class="form-group">
    {!! Form::submit('Update Client', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

{!! Form::open(['method'=>'DELETE', 'action'=> ['ClientController@destroy', $client->id]]) !!}



<div class="form-group">
    {!! Form::submit('Delete client', ['class'=>'btn btn-danger col-sm-6']) !!}
</div>

{!! Form::close() !!}

@include('includes.error-message')

@endsection