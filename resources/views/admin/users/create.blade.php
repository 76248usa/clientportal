@extends('layouts.admin')

@section('content')
<h1>Create User</h1>

{!! Form::open(['method'=> 'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
{{csrf_field()}}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('business', 'Business Name:') !!}
    {!! Form::text('business', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('number', 'Phone:') !!}
    {!! Form::text('number', null, ['class' => 'form-control'])!!}
</div>





<div class="form-group">
    {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

@include('includes.error-message')

@endsection