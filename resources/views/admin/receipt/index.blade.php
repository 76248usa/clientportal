@extends('layouts.admin')


@section('content')

<h1>PDF Receipts</h1>

<h4 class='bg-danger'>{{session('status')}}</h4>

<table class="table">
    <thead>
        <tr>
            <th>Receipt Number:</th>
            <th>Date</th>
            <th>From:</th>
            <th>To:</th>
            <th>Paid Invoice Number:</th>

            <th>Subtotal</th>
            <th>Discount</th>


            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @if($receipts ?? '')
        @foreach($receipts ?? '' as $receipt)
        <tr>

            <td>{{$receipt->id}}</td>
            <td>{{$receipt['created_at']}}</td>
            <td>{{$receipt['our_company_name']}}</td>
            <td>{{$receipt['their_company_name']}}</td>
            <td>{{$receipt['invoice_number']}}</td>
            <td>${{$receipt['sub_total']}}</td>

            <td>${{$receipt['discount']}}</td>


            <td>${{$receipt['sub_total'] - $receipt['discount']}}</td>
            <td><a href="{{ url('admin/receipts/pdfexport/' . $receipt->id) }}">PDF Export</a></td>


            <td>{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminReceiptController@destroy', $receipt->id]]) !!}


                <div class="form-group">
                    <a data-toggle="tooltip" title="Are you sure? This action will permanently delete the receipt . ">
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