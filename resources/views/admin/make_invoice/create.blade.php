@extends('layouts.admin')

@section('content')
<h1>Create Invoice</h1>

{!! Form::open(['method'=> 'POST', 'action'=>'AdminInvoiceController@store', 'files'=>true, 'enctype' => 'multipart/form-data']) !!}
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
    {!! Form::label('product_one', 'First Item:') !!}
    {!! Form::text('product_one', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_two', 'Second Item:') !!}
    {!! Form::text('product_two', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_three', 'Third Item:') !!}
    {!! Form::text('product_three', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_four', 'Fourth Item:') !!}
    {!! Form::text('product_four', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_one_price', 'First Item Price:') !!}
    {!! Form::text('product_one_price', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_two_price', 'Second Item Price:') !!}
    {!! Form::text('product_two_price', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_three_price', 'Third Item Price:') !!}
    {!! Form::text('product_three_price', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_four_price', 'Fourth Item Price:') !!}
    {!! Form::text('product_four_price', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_one_quantity', 'First Item Quantity:') !!}
    {!! Form::text('product_one_quantity', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_two_quantity', 'Second Item Quantity:') !!}
    {!! Form::text('product_two_quantity', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_three_quantity', 'Third Item Quantity:') !!}
    {!! Form::text('product_three_quantity', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('product_four_quantity', 'Fourth Item Quantity:') !!}
    {!! Form::text('product_four_quantity', null, ['class' => 'form-control'])!!}
</div>











<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::text('discount', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('tax', 'Tax:') !!}
    {!! Form::text('tax', null, ['class' => 'form-control'])!!}
</div>





<div class="form-group">
    {!! Form::submit('Create Client Invoice', ['class' => 'btn btn-primary']) !!}

</div>

{!! Form::close() !!}

@include('includes.error-message')

@endsection