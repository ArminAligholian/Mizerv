@extends('main')

@section('content')

  @include('partials._category')
  @include('partials._searchbar')

  <br>
  <br>
  <hr>

  <div class="row" style="background-color: whitesmoke">
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-6">
        <a href="{{route('restaurants.index')}}" class="btn btn-default  btn-block ">Restaurants</a>
      </div>

      <div class="col-md-6">
        <a href="{{route('areas.index')}}" class="btn btn-default  btn-block ">Areas</a>
      </div>

      <br>
    </div>
  </div>
  <hr>


    <div class="row" style="background-color: whitesmoke">
      <div class="col-md-8 col-md-offset-2">
        <br>

        @foreach($areas as $area)
          @if ($area->name === "فرشته")


          <div class="col-md-6">
            <div class="panel">
              <div class="panel-body">
                <a  href="{{route('areas.show',$area->id)}}" class="btn btn-danger btn-block">{{$area->name}}</a>
              </div>
            </div>
          </div>
        @elseif ($area->name ==="سعادت آباد")
          <div class="col-md-6">
            <div class="panel">
              <div class="panel-body">
                <a  href="{{route('areas.show',$area->id)}}" class="btn btn-primary btn-block">{{$area->name}}</a>
              </div>
            </div>
          </div>
              @endif


        @endforeach
      </div>
    </div>

@endsection
