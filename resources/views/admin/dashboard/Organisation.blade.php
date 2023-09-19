@section('content')
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Organisation</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="javascript:;">Organisation</a>
						</li>
					</ul>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue-hoki">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-user"></i>Krug Users
								</div>
								<div class="tools">
								</div>
							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
								<tr>
									<th>
										 Id
									</th>
									<th>
										 Avatar
									</th>
									<th>
										 Name
									</th>
									<th>
										 Slug
									</th>
									<th>
										 Admin Id
									</th>
								</tr>
								</thead>
								<tbody>
								<?php $i = 1; ?>
								@foreach($organisation as $value)
								<tr>
									<td id="first_col">
										 {{$i++}}
									</td>
									<td id="first_col">
									<img src="{{ asset('resources/assets/admin/layout2/img/group.jpeg')}}" alt="{{$value->name}}" class="img-circle">
									</td>
									<td>
										 {{$value->name}}
									</td>
									<td>
										 {{$value->slug}}
									</td>
									<td>
									
										 {{$value->admin_id}}
									
									</td>
								</tr>
								@endforeach
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
						<!-- END EXAMPLE TABLE PORTLET-->
@endsection