@extends('main')


@section('content')

    <div class="row">
        <div class="col-md-8">

            <img src="{{asset('images/'.$restaurant->profile_image)}}" alt="">
            <h1>{{ $restaurant->name }}</h1>


            <p class="lead"> {{ $restaurant->phone }}</p>
            <hr>
            <p class="lead"> {{ $restaurant->address }}</p>
            <hr>
            <p class="lead"> {{ $restaurant->location }}</p>
            <hr>
            <p class="lead"> {{ $restaurant->capacity }}</p>
            <hr>
            <p class="lead"> {{ $restaurant->description }}</p>
            <hr>

            <p class="lead">
                @foreach($restaurant->areas as $area)
                    <span class="label label-default">{{ $area->name }}</span>
                @endforeach
            </p>
            <hr>

            </div>
        </div>
    </div>

@endsection