@extends('main')

@section('content')

  @include('partials._category')

  @include('partials._searchbar')

<style>
  #region1:hover{
    opacity: 0.5;
  }
  #region2:hover{
    opacity: 0.5;
  }
  #region3:hover{
    opacity: 0.5;
  }
  #region4:hover{
    opacity: 0.5;
  }
  #region5:hover{
    opacity: 0.5;
  }
  #region6:hover{
    opacity: 0.5;
  }
  #region7:hover{
    opacity: 0.5;
  }
  #region8:hover{
    opacity: 0.5;
  }
</style>
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

<br><br>

<div class="container">
        <div class="row" style="padding-bottom:0.3%;">
          <div  id="region1" class="col-md-6">
              @foreach($areas as $area)
                @if ($area->name === "نیاوران")
                    <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/niavaran.jpg')}}" style="height:300px; width:590px; border-radius: 1%; " target="_blank"></a>
                @endif
              @endforeach
          </div>
          <div  id="region2" class="col-md-4">
              @foreach($areas as $area)
                @if ($area->name ==="فرشته")
                  <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/fereshteh.jpg') }}" style=" height:300px; width:388px; border-radius: 1%" hspace="10"></a>
                @endif
              @endforeach
          </div>
        </div>


        <div class="row" style="padding-bottom:0.3%;">
          <div   id="region3" class="col-md-4">
              @foreach($areas as $area)
                @if ($area->name ==="بلوار کشاورز")
                  <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/keshavarz blvd.jpg') }}" style="height:300px; width:390px; border-radius: 1%" ></a>
                @endif
              @endforeach
          </div>
          <div   id="region4" class="col-md-3" style="padding-bottom:0.3%;">
              @foreach($areas as $area)
                @if ($area->name ==="سعادت آباد")
                  <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/saadat abad.jpg') }}" style="height:150px; width:290px; border-radius: 1%" hspace="5"></a>
                @endif
              @endforeach
          </div>
          <div  id="region5" class="col-md-3" style="padding-bottom:0.3%;">
              @foreach($areas as $area)
                @if ($area->name ==="انقلاب")
                  <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/EnghelabSq.jpg') }}" style="height:150px; width:293px; border-radius: 1%" hspace="7"></a>
                @endif
              @endforeach
          </div>
          <div   id="region6" class="col-md-6">
              @foreach($areas as $area)
                @if ($area->name ==="هفت تیر")
                  <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/7tir sqr.jpg') }}" style="height:146px; width:590px; border-radius: 1%" hspace="4"></a>
                @endif
              @endforeach
          </div>
        </div>

        <div class="row" style="padding-bottom:0.1%;">
          <div  id="region7" class="col-md-5">
            @foreach($areas as $area)
              @if ($area->name ==="شهرک غرب")
                <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/shahrak gharb.jpg') }}" style="height:300px; width:490px; border-radius: 1%"></a>
              @endif
            @endforeach
          </div>
          <div   id="region8" class="col-md-5">
            @foreach($areas as $area)
              @if ($area->name ==="تجریش")
                <a  href="{{route('areas.show',$area->id)}}"><img id="homepagetest" src="{{ URL::asset('images/tajrishsq.jpg') }}" style="height:300px; width:490px; border-radius: 1%" hspace="7"></a>
              @endif
            @endforeach
          </div>
        </div>
  </div>

@endsection
