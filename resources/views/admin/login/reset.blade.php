<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8"/>
<title>KRUGME | ADMIN</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/uniform/css/uniform.default.css')?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo asset('resources/assets/admin/pages/css/adminlogin.css" rel="stylesheet" type="text/css')?>"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo asset('resources/assets/global/css/components.css')?>" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/css/plugins.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/admin/layout/css/layout.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/admin/layout/css/themes/default.css')?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo asset('resources/assets/admin/layout/css/custom.css')?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="javascript:;">
    <img src="<?php echo asset('resources/assets/admin/layout2/img/logo-big-white.png')?>" style="height: 17px;" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ route('admin.reset') }}" method="post">
    {{ csrf_field() }}
      <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-title">
            <span class="form-subtitle">Password Reset</span>
        </div>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
            Enter any username and password. </span>
        </div>
    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="email" value="{{ old('email') }}" required autofocus/>
            @if ($errors->has('email'))
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

     <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required/>
                         @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
    </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
        </div>
    </form>
    
</div>
<div class="copyright hide">
     2017 © KRUG [ME] Admin.
</div>
<!-- END LOGIN -->

<script src="<?php echo asset('resources/assets/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery-migrate.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/global/plugins/jquery.cokie.min.js')?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo asset('resources/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo asset('resources/assets/global/scripts/metronic.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout/scripts/layout.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/layout/scripts/demo.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('resources/assets/admin/pages/scripts/login.js')?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<style type="text/css">
    .help-block {
    color: #f50c0ccc;
}
</style>