@include('includes.header')
		@include('includes.sidebar')
		<div class="col-md-6 col-sm-6">
		<div class="center-dashboard">
@include('dashboard.profile_layout.profile_header')
@yield('content1')
@include('dashboard.profile_layout.profile_footer')
@yield('content')
		</div>
		</div>
@include('includes.sidebar2')
@include('includes.footer')