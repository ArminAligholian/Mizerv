
<style>
#SearchBar{
  background: #homepagetest;
}

</style>

<img id="homepagetest" src="{{ URL::asset('images/homepage test2.jpg') }}" style="width:100%;" >

<!-- search box partial-->

  <div id="SearchBar" class="row" method="get">

      <div class="col-md-offset-1 col-md-2">
  <!--select your No.-->
        <select class="form-control">
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
        </select>
      </div>
  <!-- pick your date  ---------------------------------------------------->
      <div class="col-md-3">
        <input type="date" class="form-control">
      </div>
  <!--pick your time---------------------------------------------------------->
        <div class="col-md-2">
            <select class="form-control">
              <option value="12:30">12:30 pm</option>
              <option value="1:00">1:00</option>
              <option value="1:30">1:30</option>
              <option value="2:00">2:00</option>
              <option value="2:30">2:30</option>
              <option value="3:00">3:00</option>
              <option value="4:00">4:00</option>
              <option value="5:00">5:00</option>
              <option value="6:00">6:00</option>
              <option value="7:00">7:00</option>
              <option value="8:00">8:00</option>
              <option value="9:00">9:00</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
            </select>
        </div>
    <!--find table button----------------------------------------------------->
        <div class="col-md-1">
              <a class="btn btn-primary btn-block">Find</a>
        </div>

    </div>
