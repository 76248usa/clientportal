@extends('layouts.admin')


@section('content')

<h1>PDF Invoices</h1>

<h4 class='bg-danger'>{{session('status')}}</h4>

<table class="table">
    <thead>
        <tr>
            <th>Invoice Number:</th>
            <th>Date</th>
            <th>From:</th>
            <th>To:</th>
            <th>Subtotal</th>
            <th>Discount</th>
            <th>Tax</th>

            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @if($invoices ?? '')
        @foreach($invoices ?? '' as $invoice)
        <tr>

            <td>{{$invoice->id}}</td>
            <td>{{$invoice['created_at']}}</td>
            <td>{{$invoice['our_company_name']}}</td>
            <td>{{$invoice['their_company_name']}}</td>
            <td>{{$sub_total = $invoice['product_one_price'] * $invoice['product_one_quantity'] + $invoice['product_two_price'] * $invoice['product_two_quantity'] + $invoice['product_three_price'] * $invoice['product_three_quantity'] + $invoice['product_four_price'] * $invoice ['product_four_quantity']}}</td>
            <td>${{$invoice['discount']}}</td>
            <td>${{$invoice['tax']}}</td>

            <td>${{$sub_total - $invoice['discount'] - $invoice['tax']}}</td>
            <td><a href="{{ url('admin/make_invoices/pdfexport/' . $invoice->id) }}">PDF Export</a></td>

            <td>{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminInvoiceController@destroy', $invoice->id]]) !!}


                <div class="form-group">
                    <a data-toggle="tooltip" title="Are you sure? This action will permanently delete the invoice. ">
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