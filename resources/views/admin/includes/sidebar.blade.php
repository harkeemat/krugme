<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
		
			<div class="page-sidebar navbar-collapse collapse">
				
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li @if($page_name_active=='admin/dashboard') class="start active open" @endif >
						<a href="{{url('admin/dashboard')}}">
						<i class="icon-home"></i>
						<span class="title">Dashboard</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
						</a>
					</li>
					<!-- END ANGULARJS LINK -->
					
					<li @if($page_name_active=='admin/user') class="active open" @endif>
						<a href="{{url('admin/users')}}">
						<i class="icon-briefcase"></i>
						<span class="title">Users</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
						</a></li>

					<li @if($page_name_active=='admin/organisation') class="active open" @endif>
						<a href="{{url('admin/organisation')}}">
						<i class="icon-briefcase"></i>
						<span class="title">Companies</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
						</a></li>
					
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->