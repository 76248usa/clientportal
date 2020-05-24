@extends('layouts.admin')


@section('content')



<h1>Users</h1>

<h4 class='bg-danger'>{{session('status')}}</h4>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Business</th>
            <th>Phone</th>

            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @if($users)
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->business}}</td>
            <td>{{$user->number}}</td>

            <td>{{$user->is_active == 1 ? 'Active' : 'No Active'}}</td>

        </tr>
        @endforeach
        @endif


    </tbody>
</table>



@stop