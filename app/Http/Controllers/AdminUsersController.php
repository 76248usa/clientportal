<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersCreateRequest;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;
use App\Http\Controllers;
use Session;
use App\User;
use App\Role;
use App\Documents;
use App\Invoice;
use App\Client;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id')->all();
        //dd($users);
        //$role = User::find(1)->role;

        //$name = Auth::user()->name; 

        return view('admin.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //


        $roles = Role::pluck('name', 'id')->all();


        return view('admin.users.create', compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersCreateRequest $request)
    {
        User::create($request->all());
        $roles = Role::pluck('name', 'id')->all();


        return redirect('/admin/users', compact('roles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();


        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersCreateRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $input = $request->all();

        $user->update($input);

        return redirect('/admin/users');
    }

    public function admin()
    {

        $clients = Client::all();
        $documents = Documents::all();
        $invoices = Invoice::all();

        return view('admin.index', compact('clients', 'documents', 'invoices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete($id);
        Session::flash('status', 'Task was successful!');
        //Session::flash('deleted_user', 'The user has been deleted successfully');
        return redirect('/admin/users');
    }

    public function isAdmin()
    {
        if ($this->role->name == 'admin') {
            return '/admin';
        }
        return '/home';
        //dd($user->role->name);
    }
}
