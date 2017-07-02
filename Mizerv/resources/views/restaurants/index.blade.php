@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>All Restaurants</h1>
        </div>

        <div class="col-md-3">
            <a href="{{route('restaurants.create')}}" class="btn btn-lg btn-block btn-primary">Create New Restaurants</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div><!-- end of the row -->


    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th></th>
                </thead>

                <tbody>
                @foreach($restaurants as $restaurant)

                    <tr>
                        <th>{{$restaurant->id}}</th>
                        <td>{{$restaurant->name}}</td>
                        <td>{{$restaurant->phone}}</td>
                        <td><a href="{{route('restaurants.show',$restaurant->id)}}" class="btn btn-default btn-sm"> View </a> </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
