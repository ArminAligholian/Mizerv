@extends('main')

@section('content')
  <div id="DonePage">
      <h1> That's Done, Thanks, Mohsen! Your Reservation Confirm</h1>
      <hr>
    <!--Your reservation Information-->
      <div id="LastInfo" class=" col-md-10">
        <div id="Modi.Canc" class="col-md-8">
        <!--Cafe Profile Picture-->
          <div id="CafeProfileImg" class="col-md-2">
            <p><span class="glyphicon glyphicon-th"></span></p>
          </div>
        <!--Cafe Name and reservation info-->
          <div id="CafeName" class="col-md-5">
            <p><span style="font-size: 25px;">Cafe Harchi</span></p>
            <p><span>Friday, Mehr 1</span>, <span>7:00 PM</span>, <span>2 People</span><p>
            <p><span>Modify</span> | <span>Cancel</span></p>
          </div>
        </div>
        <br><br>
      <!--your request for cafe-->
        <div id="YourRequest" class="col-md-7">
          <input type="text" class="form-control">
        </div>
      </div>

    <!--About your cafe --->
      <div id="ReservedCafe" class="col-md-10">
        <br><hr>
        <div class="col-md-5">
          <h5><strong>Descriptions</strong></h5>
          <p><span>This is the Description of cafe you reserve</span></p>
        </div>
        <div class="col-md-5">
          <p><strong>Note</strong></p>
          <p><span>The Information from your cafe for your Reservation</span></p>
        </div>
      </div>
    <!--Map of your Reserve-->
      <div id="CafeMap" class="col-md-10">
        <h1><strong>MAP</strong></h1>
        <img id="MapTest" src="{{ URL::asset('images/GoogleMap-1.jpg') }}" height="250" width="800" >
      </div>
  </div>
@endsection
