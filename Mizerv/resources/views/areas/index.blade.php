@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Areas</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($areas as $area)
                    <tr>
                        <th>{{$area->id}}</th>
                        <td>
                            <a href="{{route('areas.show',$area->id)}}" class="btn btn-primary ">{{$area->name}}</a>
                        </td>
                        <td><a href="{{route('areas.edit',$area->id)}}" class="btn btn-default  btn-block btn-sm">Edit</a></td>
                        <td>
                            <a data-toggle="modal" data-target="#myModal{{$area->name}}" class="btn btn-danger  btn-block btn-sm">Delete</a></td>

                        <div id="myModal{{$area->name}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Deleting the <strong>{{$area->name}}</strong> Category </h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete <strong>{{$area->name}}</strong>?! </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ['areas.destroy', $area->id], 'method' => 'DELETE']) !!}

                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block ']) !!}

                                            {!! Form::close() !!}
                                        </div>

                                        </td>
                                    </div>
                                </div>

                            </div>
                        </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <div class="well">
                <form method="post" action="{{route('areas.store')}}">

                    <h2>new area</h2>

                    <!-- the input name should be the same name of the parameter that we want to be sent to the DB   -->
                    <label name="name" >Name:</label>
                    <input type="text" class="form-control"  name="name">
                    <br>
                    <button class="btn btn-primary btn-block" type="submit">Create new area</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </form>
            </div>
        </div>
    </div>

@endsection