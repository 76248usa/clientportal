<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostsCreateRequest;
use Illuminate\Http\Request;
use Storage;
use Response;
use App\Post;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Download;
use Barryvdh\DomPDF\PDF;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = Post::all();
        return view('admin.document.view', compact('file'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        $data = new Post;
        if ($request->file('file')) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file = $filename;
        }
        $data->title = $request->title;
        $data->body = $request->body;
        $data->photo_name = $request->photo_name;
        $data->user_id = auth()->user()->id;
        $data->save();

        return redirect('admin/posts');



        /*$this->validate($request, [
            'photo_name' => 'nullable|max:1999'
        ]);


        //Handle File Upload
        if ($request->hasFile('photo_name')) {
            //get filename with the extension
            $filenameWithExt = $request->file('photo_name')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extention
            $extention = $request->file('photo_name')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extention;
            //Upload File
            $path = $request->file('photo_name')->storeAs('public/photo_name', $fileNameToStore);
        } else {
            $fileNameToStore = 'nofile.jpg';

            //Create Post
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id = auth()->user()->id;
            $post->photo_name = $fileNameToStore;

            $post->save();}

            return redirect('/admin/posts');*/


        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    }

    public function show($id)
    {
        $data = Post::findOrFail($id);
        return view('admin.posts.details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::findOrFail($id);

        return view('admin.posts.edit', compact('data'));
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
        $data = $request->all();

        /*if ($request->file('file')) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file = $filename;
        }*/

        if ($request->file('file')) {
            $file = $request->file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $newfile = Post::create(['file' => $filename]);
            $data['file'] = $newfile->id;
        }

        $user = Auth::user();
        //dd($user);

        //Auth::user()->posts()->whereId($id)->first()->update($data);

        //return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function downfunc($id)
    {
        $post = Post::findOrFail($id);



        return response()->download(public_path('/storage/photo_name'));
    }
}
