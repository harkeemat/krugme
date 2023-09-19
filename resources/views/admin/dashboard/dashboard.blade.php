@section('content')
				
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Dashboard</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="javascript:;">Dashboard</a>
						</li>
					</ul>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft" href="">
						<div class="visual">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<div class="details">
							<div class="number">
								Users
							</div>
							<div class="desc">
								List of All Users
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light red-soft" href="">
						<div class="visual">
							<i class="fa fa-futbol-o" aria-hidden="true"></i>
						</div>
						<div class="details">
							<div class="number">
								 Companies
							</div>
							<div class="desc">
								 List of All Companies 
							</div>
						</div>
						</a>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light purple-soft" href="">
						<div class="visual">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</div>
						<div class="details">
							<div class="number">
								 Class
							</div>
							<div class="desc">
								 List of All Classes
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- END DASHBOARD STATS -->
				
@endsection