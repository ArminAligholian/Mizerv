@extends('main')


@section('content')

    {!! Html::style('css/googlemaps.css') !!}
    <div class="row">
        <div class="col-md-5 col-md-offset-1">

            <img src="{{asset('images/'.$restaurant->profile_image)}}" alt="">
            <br>
            <br>

            <div id="map"></div>


            <br>
            <br>

            <strong>Name</strong>
            <h2>{{ $restaurant->name }}</h2>

            <strong>Phone</strong>
            <p class="lead"> {{ $restaurant->phone }}</p>
            <hr>
            <strong>Address</strong>
            <p class="lead"> {{ $restaurant->address }}</p>
            <hr>

            <strong>Social Media</strong>
            <a href="$restaurant->instagram" class="btn btn-social-icon btn-instagram">
                <i class=" fa fa-instagram"></i>
            </a>

            <a href="$restaurant->telegram" class="btn btn-social-icon btn-twitter">
                <i class=" fa fa-twitter"></i>
            </a>

            <a href="$restaurant->website" class="btn btn-social-icon btn-microsoft">
                <span class="glyphicon glyphicon-globe"></span>
            </a>

            <hr>
            <strong>Details:</strong>
            <p class="lead">Sigar: {{$restaurant->sigar}} | Parking: {{$restaurant->parking}} | Expensive Grade: {{$restaurant->expensive_grade}}</p>
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

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRSptT0JU3Yp1DdTlCc5SqtlbxB-Gyflc&callback=initMap">
    </script>
    <script src="../../../public/js/googlemaps.js"></script>
    {{Html::script('js/googlemaps.js')}}

@endsection