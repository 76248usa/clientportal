@extends('layouts.admin')


@section('content')

<h1>Clients</h1>

<h4 class='bg-danger'>{{session('status')}}</h4>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            <th>Document</th>
            <th>Document</th>
            <th>Document</th>
        </tr>
    </thead>
    <tbody>
        @if($clients)

        @foreach ($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td><a href="{{route('clients.edit', $client->id)}}">{{$client->name}}</a></td>
            <td>{{$client->email}}</td>
            <td>{{$client->title}}</td>
            <td>{{$client->description}}</td>

            @foreach ($client->documents as $document)
            <td><a href="/file/download/{{$document->file}}">{{$document->file}}</a></td>
            @endforeach





            {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        @endif


    </tbody>
</table>







@endsection