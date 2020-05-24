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
        @if($invoice ?? '')

        <a href="{{url('admin/invoice')}}">Download PDF</a>
        <h2>Invoice Number: {{$invoice['id']}}</h2>
        <p>Thank you for your business</p>

        <br><br><br>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Invoice
                    <strong>{{$invoice['created_at']}}</strong>
                    <span class="float-right"> <strong>Status:</strong> Pending</span>

                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h6 class="mb-3">From:</h6>
                            <div>

                                <strong>{{$invoice['our_company_name']}}</strong>
                            </div>
                            <div>{{$invoice['our_company_address']}}</div>
                            <div></div>
                            <div>Email: {{$invoice['our_email']}}</div>
                            <div>Phone: {{$invoice['our_phone']}}</div>

                        </div>

                        <div class="col-sm-6">
                            <h6 class="mb-3">To:</h6>
                            <div>
                                <strong>{{$invoice['their_company_name']}}</strong>
                            </div>
                            <div>{{$invoice['their_company_address']}}</div>
                            <div></div>
                            <div>Email: {{$invoice['their_email']}}</div>
                            <div>Phone: {{$invoice['our_phone']}}</div>
                            <br>
                        </div>



                    </div>

                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Item and Description</th>
                                    <th></th>

                                    <th class="right">Unit Cost</th>
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">1</td>
                                    <td class="left strong">{{$invoice['product_one']}}</td>
                                    <td class="left"></td>

                                    <td class="right">${{$invoice['product_one_price']}}</td>
                                    <td class="center">{{$invoice['product_one_quantity']}}</td>
                                    @if($invoice ?? ''['product_one_price'])

                                    <td class="right">${{$total_one = $invoice['product_one_price'] * $invoice['product_one_quantity']}}</td>
                                    @endif

                                </tr>
                                <tr>
                                    <td class="center">2</td>
                                    <td class="left">{{$invoice['product_two']}}</td>
                                    <td class="left"></td>

                                    <td class="right">${{$invoice['product_two_price']}}</td>
                                    <td class="center">{{$invoice['product_two_quantity']}}</td>
                                    @if($invoice ?? ''['product_two_price'])

                                    <td class="right">${{$total_two = $invoice['product_two_price'] * $invoice['product_two_quantity']}}</td>
                                    @endif

                                </tr>
                                <tr>
                                    <td class="center">3</td>
                                    <td class="left">{{$invoice['product_three']}}</td>
                                    <td class="left"></td>

                                    <td class="right">${{$invoice['product_three_price']}}</td>
                                    <td class="center">{{$invoice['product_three_quantity']}}</td>
                                    @if($invoice['product_three_price'])

                                    <td class="right">${{$total_three = $invoice['product_three_price'] * $invoice['product_three_quantity']}}</td>
                                    @endif

                                </tr>
                                <tr>
                                    <td class="center">4</td>
                                    <td class="left">{{$invoice['product_four']}}</td>
                                    <td class="left"></td>

                                    <td class="right">${{$invoice['product_four_price']}}</td>
                                    <td class="center">{{$invoice['product_four_quantity']}}</td>
                                    @if($invoice['product_four_price'])

                                    <td class="right">${{$total_four = $invoice['product_four_price'] * $invoice['product_four_quantity']}}</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">

                        </div>

                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>

                                        <td class="left"><strong>Subtotal</strong></td>
                                        @if($invoice['product_four_price'] || $invoice['product_three_price'] || $invoice['product_two_price']|| $invoice['product_one_price'])
                                        <td class="right">
                                            <strong>


                                                {{$sub_total = $invoice['product_one_price'] * $invoice['product_one_quantity'] + $invoice['product_two_price'] * $invoice['product_two_quantity'] + $invoice['product_three_price'] * $invoice['product_three_quantity'] + $invoice['product_four_price'] * $invoice ['product_four_quantity']}}











                                            </strong>

                                        </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount</strong>
                                        </td>
                                        <td class="right">${{$invoice['discount']}}</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Tax</strong>
                                        </td>
                                        <td class="right">${{$invoice['tax']}}</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            @if($sub_total)
                                            <strong>Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong>${{$sub_total - $invoice['discount'] - $invoice['tax']}}</strong>
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
        @endif

</body>

</html>