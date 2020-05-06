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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('admin/users', 'AdminUsersController');

Route::resource('admin/posts', 'AdminPostsController');

Route::get('/download/{id}', 'AdminPostsController@downfunc');

Route::get('/admin/invoice', function () {
    return view('admin.invoice');
});

Route::get('/admin/pdf', 'CustomerController@fun_pdf');

Route::get('/files/create', 'DocumentController@create');

Route::post('/files', 'DocumentController@store');

Route::get('/files', 'DocumentController@index');

Route::get('/files/{id}', 'DocumentController@show');

Route::get('/file/download/{file}', 'DocumentController@download');
