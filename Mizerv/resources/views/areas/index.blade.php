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
                </tr>
                </thead>

                <tbody>
                @foreach($areas as $area)
                    <tr>
                        <th>{{$area->id}}</th>
                        <td>
                            <a href="{{route('areas.show',$area->id)}}" class="btn btn-danger btn-xs">{{$area->name}}</a>
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