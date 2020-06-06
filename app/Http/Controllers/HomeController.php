<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Client;
use App\User;
use App\Role;
use App\Invoice;
use App\Documents;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$newname = $clientname->where('name' == $name)->first();
        $clients = Client::all();
        $invoices = Invoice::all();
        $documents = Documents::all();

        if (Auth::user()->name == 'Elzie I Crous') {

            return view('admin.index');
        }


        foreach ($clients as $client) {
            $clientname = $client->name;
            $name = Auth::user()->name;
            if ($clientname == $name) {
                return view('admin.clients.show', compact('client'));
            }
        }







        /*if ($name == 'Elzie I Crous') {
            $clients = Client::all();
            $invoices = Invoice::all();
            $documents = Documents::all();
            return view('admin.index');
        }*/


        //dd($clientname);



        return view('home');
    }
}
