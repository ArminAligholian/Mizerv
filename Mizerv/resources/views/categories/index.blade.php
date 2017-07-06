@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
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
                @foreach($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>
                            <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary">{{$category->name}}</a>
                        </td>
                        <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-default  btn-block btn-sm">Edit</a></td>


                       <!--modal for delete -->
                        <td>
                           <a data-toggle="modal" data-target="#myModal{{$category->name}}" class="btn btn-danger  btn-block btn-sm">Delete</a></td>


                        <div id="myModal{{$category->name}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Deleting the <strong>{{$category->name}}</strong> Category </h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete <strong>{{$category->name}}</strong>?! </p>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}

                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

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
                <form method="post" action="{{route('categories.store')}}">

                    <h2>new category</h2>

                    <!-- the input name should be the same name of the parameter that we want to be sent to the DB   -->
                    <label name="name" >Name:</label>
                    <input type="text" class="form-control"  name="name">
                    <br>
                    <button class="btn btn-primary btn-block" type="submit">Create new category</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </form>
            </div>
        </div>
    </div>

@endsection