@extends('layouts.app')

@section('content')

$posts = DB::table('posts')
->where('status', '=', 1)
->where('client_id', '=', Auth::user()->id)

->count();

echo $posts;

@endsection