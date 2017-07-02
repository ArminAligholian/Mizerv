@extends('main')

@section('content')

  @include('partials._category')
  @include('partials._searchbar')

  <br>
    <a href="{{route('restaurants.index')}}" class="btn btn-danger col-md-offset-4">Restaurants</a>
  <a href="{{route('areas.index')}}" class="btn btn-danger col-md-offset-4">Areas</a>
  <br>
  <hr>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        @foreach($areas as $area)
          <div class="col-md-6">
            <div class="panel">
              <div class="panel-body">
                <a href="{{route('areas.show',$area->id)}}" class="btn btn-danger btn-block">{{$area->name}}</a>
              </div>
            </div>

          </div>
        @endforeach
      </div>
    </div>

@endsection
