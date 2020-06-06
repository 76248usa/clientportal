<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Block\Element\Document;
use App\Documents;
use Response;
use App\Client;
use App\Type;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = Documents::all();
        $types = Type::pluck('name', 'id')->all();
        return view('admin.document.view', compact('file', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::findOrFail(1);
        $types = Type::pluck('name', 'id')->all();
        return view('admin.document.create', compact('client', 'types'));

        //return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Documents();

        if ($request->file('file')) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file = $filename;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->type_id = $request->type_id;
        $data->client_id = $request->client_id;
        $data->save();

        //dd($data->type);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$data = Documents::findOrFail($id);
        return view('admin.document.details', compact('data'));*/
        $data = Documents::findOrFail($id);
        return view('admin.document.details', compact('data'));
    }

    public function download($file)
    {
        return response()->download('storage/' . $file);
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
        $document = Documents::findOrFail($id);
        $document->delete($id);

        return redirect('admin');
    }
}
