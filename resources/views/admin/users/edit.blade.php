@extends('layouts.admin')

@section('content')

@if(Session::has('status'))



@endif
<h1>Edit User</h1>

{!! Form::model($user,['method'=> 'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
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
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id', $roles , null, ['class'=>'form-control'])!!}
</div>


<div class="row">
    <div class="col-sm-6">

        <div class="form-group">
            {!! Form::submit('Edit User', ['class' => 'btn btn-primary col-sm-6']) !!}

        </div>

        {!! Form::close() !!}
    </div>

    <div class="col-sm-6">
        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id], 'class'=>'pull-right']) !!}
        <div class="form-group">
            {!! Form::submit('Delete User', ['class' => 'btn btn-danger col-sm-6']) !!}

        </div>
        {!! Form::close() !!}

    </div>

</div>

@include('includes.error-message')

@endsection