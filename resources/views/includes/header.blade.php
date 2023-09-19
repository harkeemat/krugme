<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">
    <title>KrugMe</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset('resources/assets/global/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo asset('resources/assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('resources/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/animate.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/timeline.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/cover.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/forms.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/buttons.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/friends.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/photos3.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/profile4.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/group.css" rel="stylesheet">
    <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/user_detail.css" rel="stylesheet">
        <link href="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/css/messages2.css" rel="stylesheet">
    <link href="<?php echo asset('resources/assets/global/plugins/bootstrap-star-rating-master/css/star-rating.css')?>" media="all" rel="stylesheet" type="text/css"/>

    <style type="text/css">
    .custom_star {
    float: right;
    width: 60%;
    background: yellow;
    margin-right: -10px;
}
.custom_star .fa.fa-star {
    color: red;
}
.list-group-item:hover .list-group-item-heading{
    color: #fff !important;
}
.media-object {

    width: 70%;
}
.my_label {
    margin: 4px 0px 0px 8px;
}
.my_widget_label {
    margin: 9px 0px 0px 8px;
}
.media-heading a{
    font-size: 15px !important;
}
.user-friend-list .img-circle{
    width: 15%;
}
.navbar .page-logo {
	width: 200px;
	height: 70px;

}
.navbar .navbar-brand {

	padding: 0px 15px !important;

}
.navbar.navbar-white.navbar-fixed-top {
	border-bottom: 10px solid #0761B5;

}
.page-content {
    margin-top: 100px !important;
}
.label-info {
    background-color: #0761B5 !important;
}
.list-group-item{
    border:0px !important;
}
#SubMenu1 li {
    padding-left: 40px !important;
}
#demo4 li {
    padding-left: 20px;
}
#demo1 li {
    padding-left: 20px;
}
.list-group-item:hover {
    background: #0761B5 !important;
    color: #fff !important;
}
.progress{
    width: 60px;
    height: 60px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 6px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 6px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    font-size: 15px;
    color: #080707;
    line-height: 55px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 7%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}

@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}

.nameUser {
    font-size: 13px;
}
.font-bold{
    font-size: 11px !important;
    line-height: 5px !important; 
}
.contact-box.center-version > a {
  
    padding: 10px !important;

}


    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="animated fadeIn">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-white navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="page-logo">
          <a class="navbar-brand" href="{{url('dashboard')}}"><img class="img-responsive" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/krug_logo.png"></a>
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="actives"><a href="{{url('profile')}}">
            <span class="img-wrapper pull-left m-r-15">
              <img src="{{asset('uploads/'.Auth::user()->avatar.'')}}" alt="" style="width:25px" class="br-radius">
            </span>{{ Auth::user()->name }}</a></li>
            <li><a href="{{url('dashboard')}}">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Pages <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="profile2.html">Profile 2</a></li>
                <li><a href="profile3.html">Profile 3</a></li>
                <li><a href="profile4.html">Profile 4</a></li>
                <li><a href="sidebar_profile.html">Sidebar profile</a></li>
                <li><a href="user_detail.html">User detail</a></li>
                <li><a href="edit_profile.html">Edit profile</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="friends.html">Friends</a></li>
                <li><a href="friends2.html">Friends 2</a></li>
                <li><a href="profile_wall.html">Profile wall</a></li>
                <li><a href="photos1.html">Photos 1</a></li>
                <li><a href="photos2.html">Photos 2</a></li>
                <li><a href="view_photo.html">View photo</a></li>
                <li><a href="messages1.html">Messages 1</a></li>
                <li><a href="{{url('messages')}}">Messages</a></li>
                <li><a href="group.html">Group</a></li>
                <li><a href="list_users.html">List users</a></li>
                <li><a href="file_manager.html">File manager</a></li>
                <li><a href="people_directory.html">People directory</a></li>
                <li><a href="list_posts.html">List posts</a></li>
                <li><a href="grid_posts.html">Grid posts</a></li>
                <li><a href="forms.html">Forms</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="error404.html">Error 404</a></li>
                <li><a href="error500.html">Error 500</a></li>
                <li><a href="recover_password.html">Recover password</a></li>
                <li><a href="registration_mail.html">Registration mail</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

