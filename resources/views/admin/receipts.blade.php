<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <br><br>
        @if($receipt ?? '')

        <a href="{{url('admin/receipt')}}">Download PDF</a>
        <h2>Receipt Number: {{$receipt['id']}}</h2>
        <p>Thank you for your payment</p>

        <br><br><br>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Receipt
                    <strong>{{$receipt['created_at']}}</strong>
                    <span class="float-right"> <strong>Status:</strong> Pending</span>

                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h6 class="mb-3">From:</h6>
                            <div>

                                <strong>{{$receipt['our_company_name']}}</strong>
                            </div>
                            <div>{{$receipt['our_company_address']}}</div>
                            <div></div>
                            <div>Email: {{$receipt['our_email']}}</div>
                            <div>Phone: {{$receipt['our_phone']}}</div>

                        </div>

                        <div class="col-sm-6">
                            <h6 class="mb-3">To:</h6>
                            <div>
                                <strong>{{$receipt['their_company_name']}}</strong>
                            </div>
                            <div>{{$receipt['their_company_address']}}</div>
                            <div></div>
                            <div>Email: {{$receipt['their_email']}}</div>
                            <div>Phone: {{$receipt['our_phone']}}</div>
                            <br>
                        </div>



                    </div>

                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th class="center">Description</th>
                                    <th class="center">Paid Invoice #</th>




                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">{{$receipt['description']}}</td>
                                    <td class="right">{{$receipt['invoice_number']}}</td>
                                    <td class="left"></td>



                                </tr>



                            </tbody>
                        </table>
                        <br>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">

                        </div>

                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>

                                        <td class="left"><strong>Subtotal</strong></td>
                                        @if($receipt['sub_total'])
                                        <td class="right">
                                            <strong>


                                                {{$receipt['sub_total']}}











                                            </strong>

                                        </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount</strong>
                                        </td>
                                        <td class="right">${{$receipt['discount']}}</td>
                                    </tr>

                                    <tr>
                                        <td class="left">

                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong>${{$receipt['sub_total'] - $receipt['discount']}}</strong>
                                        </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>


</body>

</html>