    <!-- Begin page content -->
    <div class="container page-content ">
        <!-- <div class="row col-md-22">
          <form action="" method="POST" autocomplete="off">
            <input type="text" id="short" name="" placeholder="Username or email">
            <input type="password" id="short" name="" placeholder="Password">
            <input type="checkbox" name="remember" value="1">
            <a type="submit" href="profile.html" name="login" class="btn btn-danger">Login</a>
            <span class="forgot-password-link">
              <a href="#">Forgot your password?</a><br>
            </span>
          </form> 
        </div> -->
      <div class="row">
        <!-- left links -->
        <div class="col-md-3">
          <div class="profile-nav">
            <div class="widget">
              <div class="widget-body">
                <div class="user-heading round">
                  <a href="javascript:;">
                      <img src="{{asset('uploads/'.Auth::user()->avatar.'')}}" alt="">
                  </a>
                  <h1>{{ Auth::user()->name }}</h1>
                  <p>Developer</p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="{{url('dashboard')}}"> <i class="fa fa-home"></i> Home</a></li>
                  <li>
                    <a href="javascript:;"> 
                      <i class="fa fa-envelope"></i> Inbox 
                      <span class="label label-info pull-right r-activity">9</span>
                    </a>
                  </li>
                  <li><a href="javascript:;"> <i class="fa fa-bell-o"></i> Job Alerts</a></li>
                  <li><a href="javascript:;"> <i class="fa fa-link"></i> Reuirter Mails</a></li>
                  <!-- <li><a href="#"> <i class="fa fa-floppy-o"></i> Saved</a></li> -->
                </ul>
              </div>
            </div>
                        <div class="widget">
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#demo1" data-toggle="collapse"><i class="fa fa-star"></i> Krug Assesments  <i style="float: right; margin-top: 8px; font-size: 20px;" class="fa fa-caret-down"></i></a></li>
                      <div class="collapse" id="demo1">
                        <li><a href="" class="list-group-item"><i class="fa fa-edit"></i> Self Assesment</a></li>
                         <li><a href="" class="list-group-item"><i class="fa fa-users"></i> Employer's Assesment</a></li>
                         <li><a href="" class="list-group-item"><i class="fa fa-users"></i> Co-Employer's Assesment</a></li>
                         <li><a href="" class="list-group-item"><i class="fa fa-globe"></i> Review Company</a></li>
                      </div>
                </ul>
              </div>
            </div>

            <div class="widget">
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#demo4" data-toggle="collapse"><i class="fa fa-user"></i> My Profile  <i style="float: right; margin-top: 8px; font-size: 20px;" class="fa fa-caret-down"></i></a></li>
                      <div class="collapse" id="demo4">
                        <li><a href="{{url('edit_profile')}}" class="list-group-item"><i class="fa fa-edit"></i> Edit Profile</a></li>
                          <li><a href="#SubMenu1" class="list-group-item" data-toggle="collapse"><i class="fa fa-users"></i> Kruglist <i style="float: right; margin-top: 3px; font-size: 17px;" class="fa fa-caret-down"></i></a></li>
                          <div class="collapse list-group-submenu" id="SubMenu1">
                            <li><a href="{{url('kruglist')}}" class="list-group-item" data-parent="#SubMenu1"><i class="fa fa-home"></i> Inner Krug<span class="label label-info pull-right r-activity">{{Auth::user()->getFriendsCount()}}</span></a></li>
                            <li><a href="#" class="list-group-item" data-parent="#SubMenu1"> <i class="fa fa-map-marker" aria-hidden="true"></i> Outer Krug<span class="label label-info pull-right r-activity"><?php  $request = Auth::user()->getFriendRequests(); echo count($request);?></span></a></li>
                          </div>
                         <li><a href="{{url('krug_group')}}" class="list-group-item"><i class="fa fa-users"></i> Krug Communities</a></li>
                         <li><a href="" class="list-group-item"><i class="fa fa-globe"></i> Invite Friends to Krug</a></li>
                      </div>
                  <li>
                      <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="icon-key"></i> Logout </a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- end left links -->