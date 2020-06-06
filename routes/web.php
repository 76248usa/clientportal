<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminUsersController;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/home', function () {
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'admin'], function () {


    Route::get('admin', 'AdminUsersController@admin');
});



Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/posts', 'AdminPostsController');

Route::get('/download/{id}', 'AdminPostsController@downfunc');

Route::get('/admin/invoice', function () {
    return view('admin.invoice');
});

//Route::get('/admin/pdf/{id}', 'CustomerController@fun_pdf');

//Route::get('/admin/pdf/{id}', 'AdminInvoiceController@fun_pdf');


Route::get('/files/create', 'DocumentController@create');

Route::post('/files', 'DocumentController@store');

Route::get('/files', 'DocumentController@index');

Route::get('/files/{id}', 'DocumentController@show');

Route::delete('/files/{id}', 'DocumentController@destroy');


//Route::get('/files/{id}', 'AdminPostsController@show');

Route::get('/file/download/{file}', 'DocumentController@download');


Route::resource('admin/clients', 'ClientController');

Route::resource('admin/make_invoices', 'AdminInvoiceController');

//Route::post('admin/make_invoices', 'AdminInvoiceController@store');

//Route::get('admin/make_invoices/create', 'AdminInvoiceController@create');

//Route::get('admin/client/create', 'ClientController@create');

//Route::post('admin/client', 'ClientController@store');

//Route::get('admin/clients', 'ClientController@index');

//Route::get('admin/clients/{id}', 'ClientController@show');



//Route::get('admin/clients/{id}/edit', 'ClientController@edit');

//Route::get('admin/clients/{id}/edit/', ['as' => 'clients.edit', 'uses' => 'ClientController@edit']);

//Route::get('/admin/make_invoices/download/{id}', 'AdminInvoiceController@fun_pdf');

Route::get('admin/make_invoices/pdfexport/{id}', 'AdminInvoiceController@pdfexport');

//Route::get('admin/afterregister', 'HomeController');
