@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{$area->name}} Area <small>{{$area->restaurants()->count()}} Restaurants</small></h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Areas</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($area->restaurants as $restaurant)
                    <tr>
                        <td>{{$restaurant->id}}</td>
                        <th><span style="font-size:20px;">{{$restaurant->name}}</span></th>
                        <td>@foreach($restaurant->areas as $area)
                                <span class="label label-danger">{{$area->name}}</span>
                            @endforeach
                        </td>
                        <td><a href="{{route('restaurants.show',$restaurant->id)}}" class="btn btn-default btn-xs">View</a>  </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
