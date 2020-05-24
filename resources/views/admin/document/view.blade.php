@extends('layouts.admin')

@section('content')

<div class="container">
    <h2>Client Files</h2>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>View</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>

            @foreach($file as $key=>$data)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td><a href="/files/{{$data->id}}">View</a></td>
                <td><a href="/file/download/{{$data->file}}">Download</a></td>

                <td>{!! Form::open(['method'=>'DELETE', 'action'=> ['DocumentController@destroy', $data->id]]) !!}


                    <div class="form-group">
                        <a data-toggle="tooltip" title="Are you sure? This action will permanently delete the document. ">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    </div>
                    </a>
                    {!! Form::close() !!}
                </td>


            </tr>
            @endforeach


        </tbody>
    </table>
</div>











</body>

</html>










@endsection