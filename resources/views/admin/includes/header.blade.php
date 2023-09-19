<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.9.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?php echo asset('resources/assets/global/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/uniform/css/uniform.default.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE STYLES -->
<link href="<?php echo asset('resources/assets/admin/pages/css/tasks.css')?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="<?php echo asset('resources/assets/global/css/components.css')?>" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/global/css/plugins.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/admin/layout2/css/layout.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo asset('resources/assets/admin/layout2/css/themes/grey.css')?>" rel="stylesheet" type="text/css" id="style_color"/>

<link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/global/plugins/select2/select2.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo asset('resources/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')?>"/>


<link href="<?php echo asset('resources/assets/admin/pages/css/krug_admin.css')?>" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="javascript:;">
			<img src="<?php echo asset('resources/assets/admin/layout2/img/logo-default.png')?>" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->

		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		<!-- 	<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form> -->
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="<?php echo asset('resources/assets/admin/layout2/img/avatarkrug.jpg')?>"/>
					<span class="username username-hide-on-mobile">
				{{Auth::guard('admin')->user()->name}}
					</span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">	
							 <li>
                              <a href="{{ url('/admin/logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i> Logout </a>

                               <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                               		{{ csrf_field() }}
                                </form>
                            </li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->