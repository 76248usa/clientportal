@extends('layouts.admin')


@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create File</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <div class="container">
        <h2>Create File Form</h2>
        <p>Create client first before documents for clients can be created. </p>
        <form action="/files" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">


                <input type="text" name="title" placeholder="title">
                <input type="text" name="description" placeholder="description">
                <input type="text" name="client_id" placeholder="client id" required>

                <input type="file" name="file">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
@endsection