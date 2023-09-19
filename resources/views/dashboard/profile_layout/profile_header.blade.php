@section('content')
    <!-- BEGIN CONTENT -->  
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
          <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar" style="width: 220px;">
              <!-- PORTLET MAIN -->
              <div class="portlet light profile-sidebar-portlet">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
               @foreach($profile as $key => $value)
                   @if($value->profile!='')
                    <img src="{{asset('uploads/'.$value->profile.'')}}" class="img-responsive" alt="">
                    @else
                 <img src="<?php echo asset('resources/assets/admin/layout2/img/avatarkrug.jpg')?>" class="img-responsive" alt="">
                   @endif
              @endforeach
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name">
                    <?php echo Auth::user()->name; ?>
                  </div>
                  <div class="profile-usertitle-job">
                     Developer
                  </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
              <!--   <div class="profile-userbuttons">
                  <button type="button" class="btn btn-circle green-haze btn-sm">+Add Friend</button>
                  <button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
                </div> -->
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                  <ul class="nav">
                    <li class="active">
                      <a href="{{url('profile')}}">
                      <i class="icon-home"></i>
                      Overview </a>
                    </li>
                    <li>
                      <a href="{{url('account_setting')}}">
                      <i class="icon-settings"></i>
                      Account Settings </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                      <i class="icon-check"></i>
                      Tasks </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                      <i class="icon-info"></i>
                      Help </a>
                    </li>
                  </ul>
                </div>
                <!-- END MENU -->
              </div>
              <!-- END PORTLET MAIN -->
              <!-- PORTLET MAIN -->
              <div class="portlet light">
                <!-- STAT -->
                <div class="row list-separated profile-stat">
                  <div class="col-md-4 col-sm-4 col-xs-6">
                  <a href="{{ url('kruglist') }}">
                    <div class="uppercase profile-stat-title">
                       <?php 
                       echo Auth::user()->getFriendsCount();
                       ?>
                    </div>
                    <div class="uppercase profile-stat-text">
                       Friends
                    </div>
                    </a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-6">
                  <a href="{{ url('getgroups') }}">
                    <div class="uppercase profile-stat-title">
                       {{Auth::user()->getGroupsCount()}}
                    </div>
                    <div class="uppercase profile-stat-text">
                       Groups
                    </div>
                    </a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="uppercase profile-stat-title">
                       61
                    </div>
                    <div class="uppercase profile-stat-text">
                       Uploads
                    </div>
                  </div>
                </div>
                <!-- END STAT -->
                <div>
                  <h4 class="profile-desc-title">About <?php echo Auth::user()->name; ?></h4>
                  <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                </div>
              </div>
              <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
              <div class="row">
                <div class="col-md-12">