@extends('main')

@section('content')
    <div id="AlmostDone">
        <h1>You're Almost Done</h1>
        <hr>
      <!--reservation information-->
        <div class="row">
          <div id="CafeInfo" class="col-md-8">
          <!--cafe profile picture show-->
            <div id="CafeProfileImg" class="col-md-2">
              <p><span class="glyphicon glyphicon-th"></span></p>
            </div>
          <!--Number of peolpe for reserve-->
            <div id="NumberGusts" class="col-md-2">
              <p>Guests</p>
              <p>2 people</p>
            </div>
          <!--Reserve Date-->
            <div id="DateReserve" class="col-md-2">
              <p>Date</p>
              <p>Friday,Mehr 1</p>
            </div>
          <!--reservation Time-->
            <div id="TimeReserve" class="col-md-2">
              <p>Time</p>
              <p>7:00 PM</p>
            </div>
          <!--Cafe Name-->
            <div id="CafeName" class="col-md-3">
              <p>Cafe</p>
              <p>Cafe Harchi</p>
            </div>
          </div>
        </div>
        <hr>
      <!--your Reservation info-->
        <div class="row">
          <div id="YourInfo" class="col-md-10">
            <div id="YourPhone" class="cold-md-4">
              <div id="PishNo" class="col-md-1">
                <select class="form-control">
                  <option value="09">09</option>
                  <option value="021">021</option>
                </select>
              </div>
              <div id="YourNo" class="col-md-3">
                <input type="text" class="form-control">
                <!--default phone number show-->
              </div>
            </div>
            <div id="YourMail" class="col-md-4">
              <input type="text" class="form-control">
              <!--default Mail show-->
            </div>
            <br><br>
            <div id="YourRequest" class="col-md-8">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <hr>
      <!--Receiving information Ways-->
        <div id="ReceiveInfo">
          <input type="checkbox">Receive By SMS</input>
          <br>
          <input type="checkbox">Receive By Email</input>
          <br>
          <input type="checkbox">I want new Emails from Mizerv</input>
        </div>
        <hr>
      <!--Confirm And go to next DonePage-->
        <div class="col-md-3">
          <a class="btn btn-danger btn-block">Confirm</a>
        </div>
    </div>
    <br>
@endsection
