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
                 <a class="navbar-brand" href="{{route('home')}}">
                     <span><img src="{{ URL::asset('images/logo.jpg') }}" class="imagelogo" style="width:55px;height:30px; position: relative;"> </span>MIZERV
                 </a>
             </div>

             <div id="navbar6" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav navbar-right">
                         <!-- Authentication Links -->
                         @if (Auth::guest())
                             <!--sign in btn-------------------------------------------------------->
                                 <li class="active">
                                     <a data-toggle="modal" data-target="#signinmodal" >Sign in</a>
                                     @extends('partials.navigation._signinmodal')
                                 </li>

                                 <!--sign up btn------------------------------------------------------>
                                 <li>
                                     <a data-toggle="modal" data-target="#signupmodal">Sign up</a>
                                     @extends('partials.navigation._signupmodal')
                                 </li>

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
                         @else
                             <!-- profile dropdown -->
                                 <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                         {{ Auth::user()->name }} <span class="caret"></span>
                                     </a>
                                     <ul class="dropdown-menu" role="menu">

                                         <!--point progress-->

                                         <div class="progress progress-striped active">
                                             <span>Points</span>
                                             <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                 <span class="sr-only">45% Complete</span>
                                             </div>
                                         </div>

                                         <!--profile link-->
                                         <li><a href="{{route('myprofile')}}">My Profile</a></li>

                                         <li class="divider"></li>

                                         <!--upcomming reservation link-->
                                         <li><a href="#">Upcomming Reservation</a></li>

                                         <!--past reservations-->
                                         <li><a href="#">Past Reservation</a></li>

                                         <li class="divider"></li>

                                         <!--sing out-->
                                         <li>
                                             <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                 Logout
                                             </a>

                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 {{ csrf_field() }}
                                             </form>
                                         </li>

                                     </ul>
                                 </li>

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

                         @endif
                     </ul>
             </div>
     </div>
</nav>


