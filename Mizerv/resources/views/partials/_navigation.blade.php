  <nav >
    <div >
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--Brand and LOGO--------------------------------------------------->
        <a class="navbar-brand" href="#"><span><img src="{{ URL::asset('images/logo.jpg') }}" class="imagelogo" style="width:55px;height:30px; position: relative;"> </span>MIZERV
        </a>
      </div>
        <div id="navbar6" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
  <!--your profile---------------------------------------->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mohsen<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

                      <!--point progress-->

                      <div class="progress progress-striped active">
                        <span>Points</span>
                          <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                            <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

              <!--profile link-->
              <li><a href="#">My Profile</a></li>

              <li class="divider"></li>

              <!--upcomming reservation link-->
              <li><a href="#">Upcomming Reservation</a></li>

              <!--past reservations-->
              <li><a href="#">Past Reservation</a></li>

              <li class="divider"></li>

              <!--sing out-->
              <li><a href="#">Sign Out</a></li>

            </ul>
          </li>

          <!--sign in-------------------------------------------------------->
          <li class="active"><a href="#" data-toggle="modal" data-target="#signinmodal">Sign in</a></li>

          <!--sign up------------------------------------------------------>
          <li><a href="#" data-toggle="modal" data-target="#signupmodal">Sign up</a></li>

          <!--download application source--------------------------------->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Download<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">AppStore</a></li>
              <li><a href="#">Google Play</a></li>
              <li><a href="#">CafeBazar</a></li>
              <li><a href="#">Direct Link</a></li>
            </ul>
          </li>


        </ul>
      </div>

    </div>

    <!------------------------------------------------------------------------------------->
    <!--sign in modal------------------------------------------>
    <div class="modal fade" id="signinmodal" role="dialog">
   <div class="modal-dialog modal-sm">
     <div class="modal-content">
       <div class="modal-header">

         <!--close icon -->
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <!---modal title-->
         <h4 class="modal-title">Sign in</h4>

       </div>

       <div class="modal-body">

            <!--sign in with user pass---------------------->
            <form>

                  <div class="container">

                    <!-- enter user name-->
                    <label><b>Username</b></label>

                      <br>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                      <br>

                      <!-- enter user password-->
                    <label><b>Password</b></label>

                      <br>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                      <br>

                      <!-- login btn-->
                    <button type="submit">Login</button>
                      <!--remember me check box-->
                    <input type="checkbox" checked="checked"> Remember me
                  </div>

                  <div class="container">
                    <!---forgot password-->
                    <span class="psw"><a href="#">Forgot password?</a></span>

                  </div>

              </form>


        </div>

        <div class="modal-footer">

          <!--sign in with Google +   ----------------------->
          <button type="button" class="btn btn-danger">Google</button>

       </div>
     </div>
   </div>
 </div>
</div>
<!--------------------------------------------------------------->
<!----------------------------------------------------------------->
<!---sign up modal-------------------------------------------------->
<div class="modal fade" id="signupmodal" role="dialog">
<div class="modal-dialog modal-sm">
 <div class="modal-content">
   <div class="modal-header">
     <!---close icon-------------------------------------------------->
     <button type="button" class="close" data-dismiss="modal">&times;</button>

     <!--modal title-->
     <h4 class="modal-title">Sign in</h4>

   </div>

   <div class="modal-body">

        <!--sign in with user pass---------------------->
        <form>

              <div class="container">
                <!---enter first and last name-------------------------------------------------->
                <label><b>Name</b></label>
                  <br>
                <input type="text" placeholder="Enter Name" name="flname" required>
                  <br>
                  <!---enter email-------------------------------------------------->
                <label><b>Email</b></label>
                  <br>
                <input type="text" placeholder="Enter Email" name="mail" required>
                  <br>
                  <!---enter your phone-------------------------------------------------->
                <label><b>Phone</b></label>
                  <br>
                <input type="text" placeholder="Enter Phone" name="phone" required>
                  <br>
                  <!---enter password-------------------------------------------------->
                <label><b>Password</b></label>
                  <br>
                <input type="password" placeholder="Enter Password" name="psw" required>
                  <br>
                  <!---confirm password-------------------------------------------------->
                <label><b>Password</b></label>
                  <br>
                <input type="password" placeholder="Confirm Password" name="cpsw" required>
                  <br>
                  <!---sign up btn-------------------------------------------------->
                <button type="submit">Sign up</button>
                    <!---I agree-------------------------------------------------->
                <input type="checkbox" checked="checked"> I Agree
              </div>
                <!--forgot password-->
              <div class="container">
                <span class="psw"><a href="#">Forgot password?</a></span>
              </div>

          </form>


    </div>

    <div class="modal-footer">
      <!--sign in with Google +   ----------------------->
      <button type="button" class="btn btn-danger">Google</button>

   </div>
 </div>
</div>
</div>
</div>

</div>
  </nav>
