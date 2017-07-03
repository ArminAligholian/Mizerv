@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{$category->name}} Area <small>{{$category->restaurants()->count()}} Restaurants</small></h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($category->restaurants as $restaurant)
                    <tr>
                        <td>{{$restaurant->id}}</td>
                        <th><span style="font-size:20px;">{{$restaurant->name}}</span></th>
                        <td>@foreach($restaurant->categories as $category)
                                <span class="label label-danger">{{$category->name}}</span>
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
