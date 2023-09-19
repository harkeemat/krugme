@section('content1')
<!-- BEGIN PROFILE CONTENT -->
					<div class="portlet light">
						<div class="portlet-title tabbable-line">
							<div class="caption caption-md">
								<i class="icon-globe theme-font hide"></i>
								<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
							</div>
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1_1" data-toggle="tab">Personal Info</a>
								</li>
								<li>
									<a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
								</li>
								<li>
									<a href="#tab_1_3" data-toggle="tab">Change Password</a>
								</li>
								<!-- <li>
									<a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
								</li> -->
							</ul>
						</div>
			<div class="portlet-body">
				<div class="tab-content">
					<!-- PERSONAL INFO TAB -->
					<div class="tab-pane active" id="tab_1_1">
						<form role="form" action="#">
						@foreach($profile as $value)
							<div class="form-group ">
								<label class="control-label">Full Name</label>
								<input type="text" name="first_name" class="form-control" value="{{$value->first_name}}" />
							</div>
							<div class="form-group">
							<label class="control-label">Middle Name</label>
								<input type="text" name="middle_name" class="form-control" value="{{$value->middle_name}}"/>
							</div>
							<div class="form-group">
								<label class="control-label">Last Name</label>
								<input type="text" name="last_name" class="form-control" value="{{$value->last_name}}"/>
							</div>
							<div class="form-group">
								<label class="control-label">Mobile Number</label>
								<input type="text" name="mobile_no" class="form-control" value="{{$value->mobile_no}}"/>
							</div>
							<div class="form-group">
								<label class="control-label">Interests</label>
								<input type="text" placeholder="Design, Web etc." class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">Occupation</label>
								<input type="text" placeholder="Web Developer" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">About</label>
								<textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Website Url</label>
								<input type="text" placeholder="http://www.mywebsite.com" class="form-control"/>
							</div>
							<div class="margiv-top-10">
								<a href="javascript:;" class="btn green-haze">
								Save Changes </a>
								<a href="javascript:;" class="btn default">
								Cancel </a>
							</div>
							
						</form>
					</div>
					<!-- END PERSONAL INFO TAB -->
					<!-- CHANGE AVATAR TAB -->
					<div class="tab-pane" id="tab_1_2">
						<form action="#" role="form">
							<div class="form-group">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
										@if($value->profile !="")
                    <img src="{{asset('uploads/'.$value->profile.'')}}" alt="" />
                    @else    
                    <img src="<?php echo asset('resources/assets/admin/layout2/img/no-image.png')?>" alt="" /> 
                    @endif
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="width: 150px; height: 150px;">
									</div>
									<div>
										<span class="btn default btn-file">
										<span class="fileinput-new">
										Select image </span>
										<span class="fileinput-exists">
										Change </span>
										<input type="file" name="avatar">
										</span>
										<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
										Remove </a>
									</div>
								</div>
								<div class="clearfix margin-top-10">
									<span class="label label-danger">NOTE! </span>
									<span>image size must have 120 x 120 pixels </span>
								</div>
							</div>
							<div class="margin-top-10">
								<a href="javascript:;" class="btn green-haze">
								Submit </a>
								<a href="javascript:;" class="btn default">
								Cancel </a>
							</div>
						</form>
						@endforeach
					</div>
					<!-- END CHANGE AVATAR TAB -->
					<!-- CHANGE PASSWORD TAB -->
					<div class="tab-pane" id="tab_1_3">
						<form action="#">
							<div class="form-group">
								<label class="control-label">Current Password</label>
								<input type="password" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">New Password</label>
								<input type="password" class="form-control"/>
							</div>
							<div class="form-group">
								<label class="control-label">Re-type New Password</label>
								<input type="password" class="form-control"/>
							</div>
							<div class="margin-top-10">
								<a href="javascript:;" class="btn green-haze">
								Change Password </a>
								<a href="javascript:;" class="btn default">
								Cancel </a>
							</div>
						</form>
					</div>
					<!-- END CHANGE PASSWORD TAB -->
		<!-- PRIVACY SETTINGS TAB -->
					<!-- <div class="tab-pane" id="tab_1_4">
						<form action="#">
							<table class="table table-light table-hover">
							<tr>
								<td>
									 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
								</td>
								<td>
									<label class="uniform-inline">
									<input type="radio" name="optionsRadios1" value="option1"/>
									Yes </label>
									<label class="uniform-inline">
									<input type="radio" name="optionsRadios1" value="option2" checked/>
									No </label>
								</td>
							</tr>
							<tr>
								<td>
									 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
								</td>
								<td>
									<label class="uniform-inline">
									<input type="checkbox" value=""/> Yes </label>
								</td>
							</tr>
							<tr>
								<td>
									 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
								</td>
								<td>
									<label class="uniform-inline">
									<input type="checkbox" value=""/> Yes </label>
								</td>
							</tr>
							<tr>
								<td>
									 Enim eiusmod high life accusamus terry richardson ad squid wolf moon
								</td>
								<td>
									<label class="uniform-inline">
									<input type="checkbox" value=""/> Yes </label>
								</td>
							</tr>
							</table>-->
							<!--end profile-settings-->
							<!--<div class="margin-top-10">
								<a href="javascript:;" class="btn green-haze">
								Save Changes </a>
								<a href="javascript:;" class="btn default">
								Cancel </a>
							</div>
						</form>
					</div> -->
					<!-- END PRIVACY SETTINGS TAB -->
				</div>
			</div>
		</div>

<!-- END PROFILE CONTENT -->
@endsection