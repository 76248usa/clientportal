@extends('layouts.admin')


@section('content')

<h1>Clients</h1>

<h4 class='bg-danger'>{{session('status')}}</h4>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Document</th>
        </tr>
    </thead>
    <tbody>
        @if($clients)
        @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td><a href="#">{{$client->name}}</a></td>
            <td>{{$client->title}}</td>
            <td>{{$client->description}}</td>
            <td>{{$client->document ? $client->document->file : 'Uncategorized'}}</td>
            <td><a href="/file/download/{{$client->document->file}}">Download</a></td>

        </tr>
        @endforeach
        @endif


    </tbody>
</table>

@endsection