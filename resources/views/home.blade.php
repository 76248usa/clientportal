@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Page</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <h2>Thank you for registering</h2>
                    <p>You will receive information at your email address</p>


                    <!--You are logged in!-->

                </div>
            </div>
        </div>
    </div>
</div>




@endsection