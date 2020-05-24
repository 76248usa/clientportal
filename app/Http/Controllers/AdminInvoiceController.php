<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use PDF;

class AdminInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.make_invoice.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.make_invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = Invoice::create($request->all());

        //dd($invoice);

        return view('/admin/invoice', compact('invoice'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$invoice = Invoice::findOrFail($id);
        //dd($invoice);
        //$pdf = PDF::loadView('admin.invoice', compact('invoice'));
        //return $pdf->download('invoice.pdf', compact('invoice'));
    }

    public function pdfexport($id)
    {
        $invoice = Invoice::findOrFail($id);
        //dd($invoice);
        $pdf = PDF::loadView('admin.invoice', compact('invoice'))->setPaper('a4', 'portrait');
        $filename = $invoice->their_company_name;
        return $pdf->stream($filename . '.pdf');

        //return $pdf->download('invoice.pdf');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete($id);


        return redirect('/admin/make_invoices');

    }
}
