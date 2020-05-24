<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Invoice;

class CustomerController extends Controller
{
    public function fun_pdf($id)
    {
        //$invoice = Invoice::findOrFail($id);
        //dd($invoice);
        //$pdf = PDF::loadView('admin.invoice');
        //return $pdf->download('invoice.pdf');
    }
}
