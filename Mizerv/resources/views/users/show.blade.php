@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
                <div class="page-header">
                    User information
                </div>

                <div class="panel-body">
                   <div class="col-md-3">
                       <label>Name:</label>
                       <p>{{$user->name}}</p>
                   </div>
                    <div class="col-md-3 col-md-offset-1">
                        <label>Email:</label>
                        <p>{{$user->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection