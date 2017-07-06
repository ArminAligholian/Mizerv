@extends('main')


@section('content')

    <div class="row">
        <div class="col-md-5 col-md-offset-1">

            <img src="{{asset('images/'.$restaurant->profile_image)}}" alt="">
            <br>
            <br>
            <strong>Name</strong>
            <h2>{{ $restaurant->name }}</h2>

            <strong>Phone</strong>
            <p class="lead"> {{ $restaurant->phone }}</p>
            <hr>
            <strong>Address</strong>
            <p class="lead"> {{ $restaurant->address }}</p>

            <strong>Location</strong>
            <p class="lead"> {{ $restaurant->location }}</p>
            <hr>

            <strong>Capacity</strong>
            <p class="lead"> {{ $restaurant->capacity }}</p>
            <hr>

            <strong>Description</strong>
            <p class="lead"> {{ $restaurant->description }}</p>
            <hr>

                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-4">
                            <strong>Areas</strong>
                            <p class="lead">
                                @foreach($restaurant->areas as $area)
                                    <span class="label label-default">{{ $area->name }}</span>
                                @endforeach
                            </p>
                            <hr>

                        </div>

                        <div class="col-md-4">
                            <strong>Categories</strong>
                            <p class="lead">
                                @foreach($restaurant->categories as $category)
                                    <span class="label label-default">{{ $category->name }}</span>
                                @endforeach
                            </p>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        <br>
        <br>
        <div class="col-md-3">
            <a class="btn btn-danger btn-block" href="{{route('restaurants.index')}}">all restaurants</a>
        </div>
    </div>

@endsection