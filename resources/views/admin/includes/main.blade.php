@include('admin.includes.header')
<div class="clearfix"></div>
<div class="container">
	<div class="page-container">
		@include('admin.includes.sidebar') 
		<div class="page-content-wrapper">
			<div class="page-content">
				 @yield('content')
			</div>
		</div>
	</div>
 @include('admin.includes.footer')
	