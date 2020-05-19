<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Documents;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        /*foreach ($client->documents as $document) {
            echo $document->title . "<br>";
        }*/

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $documents = Documents::pluck('title', 'id')->all();

        return view('admin.clients.create', compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create($request->all());

        //$data = new Client();
        //$data->name = $request->name;
        //$data->title = $request->title;
        //$data->description = $request->description;
        //$data->document_id = $request->document_id;
        //$data->save();


        return redirect('/admin/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);

        //dd($client);

        return view('admin.clients.show', compact('client'));
    }

    public function view($id)
    {
        $client = Client::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrfail($id);

        $documents = Documents::pluck('title', 'id')->all();

        return view('admin.clients.edit', compact('client', 'documents'));
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
        $client = Client::findOrFail($id);
        $input = $request->all();
        $client->update($input);
        return redirect('/admin/clients');

        //$client = Client::findOrFail($id);
        //$new = $request->all();
        //dd($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        //dd($client);

        $client->delete();


        return redirect('admin.index');
    }
}
