@extends('layouts.admin')

@section('content')
<h1>Create Receipt</h1>

{!! Form::open(['method'=> 'POST', 'action'=>'AdminReceiptController@store', 'files'=>true, 'enctype' => 'multipart/form-data']) !!}
{{csrf_field()}}

<div class="form-group">
    {!! Form::label('our_company_name', 'Our Company Name:') !!}
    {!! Form::text('our_company_name', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('our_company_address', 'Our Company Address:') !!}
    {!! Form::text('our_company_address', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('our_email', 'Our Email:') !!}
    {!! Form::email('our_email', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('our_phone', 'Our Company Phone:') !!}
    {!! Form::text('our_phone', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('their_company_name', 'Client Company Name:') !!}
    {!! Form::text('their_company_name', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('their_company_address', 'Client Company Address:') !!}
    {!! Form::text('their_company_address', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('their_email', 'Client Company Email:') !!}
    {!! Form::email('their_email', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('their_phone', 'Client Company Phone:') !!}
    {!! Form::text('their_phone', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('invoice_number', 'Invoice Number:') !!}
    {!! Form::text('invoice_number', null, ['class' => 'form-control'])!!}
</div>


<div class="form-group">
    {!! Form::label('sub_total', 'Sub Total:') !!}
    {!! Form::text('sub_total', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::text('discount', null, ['class' => 'form-control'])!!}
</div>



<div class="form-group">
    {!! Form::submit('Create Client Receipt', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

@include('includes.error-message')

@endsection