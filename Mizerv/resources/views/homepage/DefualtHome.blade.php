@extends('main')

@section('content')

  @include('partials._category')
  @include('partials._searchbar')

  <br>
    <a href="{{route('restaurants.index')}}" class="btn btn-danger col-md-offset-4">Restaurants</a>

@endsection
