<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class CustomerController extends Controller
{
    public function fun_pdf()
    {
        $pdf = PDF::loadView('admin.invoice');
        return $pdf->download('invoice.pdf');
    }
}
