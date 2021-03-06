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
use DB;

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

        foreach ($documents as $document) {
            if ($document->type->name == 'invoice') {
                $invoice = $document->type->name;
            }
            if ($document->type->name == 'receipt') {
                $receipt = $document->type->name;
            }
            if ($document->type->name == 'message') {
                $message = $document->type->name;
            }
            if ($document->type->name == 'lab') {
                $lab = $document->type->name;
            }
        }

        /*$posts = DB::table('posts')
            ->where('status', '=', 1)
            ->where('client_id', '=', Auth::user()->id)

            ->count();

        echo $posts;*/

        $post_count = $posts = DB::table('posts')
            ->where('status', '=', 1)
            ->where('client_id', '=', Auth::user()->id)

            ->count();

        //echo $post_count;

        if (Auth::user()->role_id == 1) {

            return view('admin.index');
        }

        foreach ($clients as $client) {
            $clientname = $client->email;
            $name = Auth::user()->email;
            if ($clientname == $name) {
                return view('admin.clients.show', compact('client'));
            }
        }



        return view('/welcome');
    }
}
