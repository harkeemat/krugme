@extends('user_detail.layout.main')
@section('content')
<div class="header_form col-md-12"><div class="col-md-4 col-md-offset-4" style="border: 2px solid black;"><span id="krug_logo">K R U G - </span><span style="font-size: 14px">power to connect</span>
</div>
</div>
<p style="margin-bottom: 20px; font-size: 12px;">Please fill the form below once completed a mail shall send from our end to your current and previous employee for rating, review, authentication and verification purpose</p>
<div class="col-md-12 ">
<div class="row">

<!-- begin sample form portlet-->
<!-- start personal details -->
	<div class="portlet box green ">
				<div class="portlet-title">
					<div class="caption">
					<i class="glyphicon glyphicon-user"></i>Personal Details
					</div>
				</div>
	<div class="portlet-body form">
		<form class="form-horizontal" id="form_sample_1" role="form" action="{{url('update_profile')}}" method="post" enctype="multipart/form-data">
		 {{ csrf_field() }}
		 @foreach($personal_detail as $key => $value)
		 <input type="hidden" name="personal_id" value="{{$value->id}}">

			<div class="personal_details">
			   <div class="form-body">
			   <div class="form-group col-md-2 image">
               <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 120px; height: 120px;">
                    @if($value->profile !="")
                    <img src="{{asset('uploads/'.$value->profile.'')}}" alt="" />
                    @else    
                    <img src="<?php echo asset('resources/assets/admin/layout2/img/no-image.png')?>" alt="" /> 
                    @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="width: 120px; height: 120px;"> </div>
                    <div>
                        <span class="btn default btn-file change_button">
                            <span class="fileinput-new select_button"> Select image </span>
                           <span class="fileinput-exists"> Change </span>
                            <input type="file" name="profile"> </span>
                        <a href="javascript:;" class="btn default fileinput-exists change_button" data-dismiss="fileinput"> Remove </a>
                        <p style="font-size: 10px; margin-top: 10px; color: #920505e6;">image size must have 120 x 120 pixels </p>
                    </div>
                </div>
                </div>
         <input type="hidden" name="old_avatar" value="{{$value->profile}}">
        <div class="col-md-10">
	        <div class="form-group">
				<label class="col-md-3 control-label">Adhaar No</label>
					<input type="hidden" name="users_id" class="form-control" value="<?php echo Auth::user()->id?>">
				<div class="col-md-9 aadhar">
					<input type="text" name="aadhar_no" class="form-control" placeholder="Adhaar No" value="{{$value->aadhar_no}}">
					
				</div>
			</div>
					<div class="form-group">
						<label class="col-md-3 control-label">First Name</label>
						<div class="col-md-3 u_name">
							<input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$value->first_name}}">
							
						</div>
						<label class="col-md-1 control-label">Middle</label>
						<div class="col-md-3 u_name">
							<input type="text" class="form-control" name="middle_name" placeholder="Middle Name" value="{{$value->middle_name}}">
						</div>
						<label class="col-md-1 control-label">Last</label>
						<div class="col-md-3 u_name">
							<input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{$value->last_name}}">
						</div>
					</div>




					<div class="form-group">
					<label class="col-md-3 control-label">Gender</label>
					<div class="col-md-9">
						<div class="radio-list">
							<label class="radio-inline">
							<input type="radio" name="gender" id="optionsradios25" value="Male" @if(old('gender',$value->gender)=="Male") checked @endif>Male</label>
							<label class="radio-inline">
							<input type="radio" name="gender" id="optionsradios26" value="Female" @if(old('gender',$value->gender)=="Female") checked @endif>Female</label>
							<label class="radio-inline">
							<input type="radio" name="gender" id="optionsradios27" value="Others" @if(old('gender',$value->gender)=="Others") checked @endif>Others</label>
						</div>
					</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">DOB</label>
						<div class="col-md-9">
							<div class="input-group input-medium date date-picker" data-date="" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
								<input type="text" class="form-control" name="dob" value="{{$value->dob}}" readonly>
								<span class="input-group-btn">
									<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
								</span>
							</div>				
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Place Of Birth</label>
						<div class="col-md-4">
							<select class="form-control" name="place_of_birth" id="place_of_birth">
							@if($value->place_of_birth !="")
						<option value="{{$value->place_of_birth}}">{{Auth::user()->getCityName($value->place_of_birth)}}</option>
							@else
						<option value="">Select Birth Place</option>		   
							@endif
							</select>
						</div>
					</div>


					<div class="form-group">
						<label class="col-md-3 control-label">Current Location</label>
						<div class="col-md-4">
							<select class="form-control" name="current_location" id="place_of_birth">
							@if($value->place_of_birth !="")
						<option value="{{$value->current_location}}">{{Auth::user()->getCityName($value->current_location)}}</option>
							@else
						 <option value="">Select Current Location</option>		   
							@endif
							  
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Country</label>
						<div class="col-md-4">
							<select class="form-control" name="country" id="country">
							@if($value->country !="")
						<option value="{{$value->country}}">{{CountryState::getCountries()[$value->country]}}</option>
							@else
						 <option value="">Select Country</option> 		   
							@endif
							  
					@foreach ($country as $key =>$item)
					@for($i = 0, $size = count($value); $i < $size; $i++)
							    <option value="{{$key}}">{{$item}}</option>
					@endfor
					@endforeach
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label">Mobile No</label>
						<div class="col-md-4">							
							<input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" value="{{$value->mobile_no}}">
						</div>
					</div>					
				</div>
			</div>
		</div>	
@endforeach
			

<!-- end personal details -->

<!-- start work experience -->
@foreach($work_experience as $key => $value)
 <input type="hidden" name="work_id" value="{{$value->id}}">
			<div class="work_experience">
					<div class="portlet box green ">
						<div class="portlet-title">
							<div class="caption">
							<i class="glyphicon glyphicon-briefcase"></i>Work Experience 
							</div>
						</div>
					</div>
				<div class="form-body">
				 <div class="form-group col-md-2">
				 </div>
				 <div class="col-md-10">
                    <div class="form-group">
						<label class="col-md-3 control-label">Are You</label>
						<div class="col-md-9">
							<div class="radio-list">
								<label class="radio-inline">
									<input type="radio" name="position_level" id="optionsradios25" value="Fresher" @if(old('position_level',$value->position_level)=="Fresher") checked @endif>Fresher
								</label>
								<label class="radio-inline">
									<input type="radio" name="position_level" id="optionsradios26" value="Experience" @if(old('position_level',$value->position_level)=="Experience") checked @endif>Experience
								</label>
								<label class="radio-inline">
									<input type="radio" name="position_level" id="optionsradios27" value="Freelancer" @if(old('position_level',$value->position_level)=="Freelancer") checked @endif>Freelancer
								</label>
							</div>
						</div>
					</div>



					<div class="form-group">
						<label class="col-md-3 control-label">Currently Working</label>
						<div class="col-md-9">
							<div class="radio-list">
								<label class="radio-inline">
									<input type="radio" name="currently_working" id="optionsradios25" value="yes" @if(old('currently_working',$value->currently_working)=="yes") checked @endif>Yes
								</label>
								<label class="radio-inline">
									<input type="radio" name="currently_working" id="optionsradios26" value="no" @if(old('currently_working',$value->currently_working)=="no") checked @endif>No
								</label>
							</div>
						</div>
					</div>





					<div class="form-group">
						<label class="col-md-3 control-label">Job Title</label>
						<div class="col-md-4">
							<input type="text" name="work_job_title" class="form-control" placeholder="Job Title" value="{{$value->work_job_title}}">						
						</div>
					</div>



					<div class="form-group">
						<label class="col-md-3 control-label">Company Name</label>
						<div class="col-md-4">
							<input type="text" name="work_company_name" class="form-control" placeholder="Company Name" value="{{$value->work_company_name}}">
						</div>
					</div>



					<div class="form-group">
					<label class="col-md-3 control-label">Industry Of the Company</label>
						<div class="col-md-4">
							<select class="form-control" name="work_industry" id="industryTypeId">
								<option value="">Select Industry Type</option>
								<option value="IT">IT</option>
							</select>
						</div>
					</div>




					<div class="form-group">
						<label class="col-md-3 control-label">Functional Area Of The Job</label>
						<div class="col-md-4">
							<select class="form-control" name="work_functional_area" id="funcAreaId">
								<option value="">Select Functional Area</option>
								<option value="developer">Developer</option>
							</select>
						</div>
					</div>




					<div class="form-group">
						<label class="col-md-3 control-label">Employer</label>
						<div class="col-md-4">
							<select class="form-control" name="work_employer">
							<option value="">select work_employer</option>
							<option value="work_employer 1">work_employer 1</option>
							<option value="work_employer 1">work_employer 2</option>
							<option value="work_employer 1">work_employer 3</option>
							<option value="work_employer 1">work_employer 4</option>
							<option value="work_employer 1">work_employer 5</option>
							</select>
						</div>
					</div>



<?php 
$current_salary_annual=explode(", ", $value->current_salary_annual);
?>
					<div class="form-group">
						<label class="col-md-3 control-label">Current Annual Salary</label>
							<div class="col-md-4">
								<select class="form-control" name="current_salary_annual[]">

							@if($value->current_salary_annual !="")
								<option value="{{$current_salary_annual[0]}}">{{$current_salary_annual[0]}}</option>
								@else
								<option value="">Salary (Lakh)</option>
								@endif
									<?php for ($i=1; $i<=10; $i++) { ?>
									<option value="<?php echo $i; ?> Lakh"><?php echo $i; ?>&nbsp;&nbsp;Lakh</option>
									<?php } ?>
								</select>
							</div>
						<label class="control-label"></label>
						<div class="col-md-4">
							<select class="form-control" name="current_salary_annual[]">
							@if($value->current_salary_annual !="")
								<option value="{{$current_salary_annual[1]}}">{{$current_salary_annual[1]}}</option>
								@else
								<option value="">Salary (Thousand)</option>
								@endif							
								<?php for ($i=1; $i<=19; $i++) { ?>
								<option value="<?php echo $i*5; ?> Thousand"><?php echo $i*5; ?> Thousand</option>	
								<?php } ?>
							</select>
						</div>
					</div>
<?php 
$start_work_duration=explode(", ", $value->start_work_duration);
?>
					<div class="form-group">
						<label class="col-md-3 control-label">Duration in this Job</label>
						<div class="col-md-2">
							<select class="form-control" name="start_work_duration[]">
							@if($value->start_work_duration !="")
								<option value="{{$start_work_duration[1]}}">{{$start_work_duration[0]}}</option>
								@else
								<option value="">Month</option>
							@endif							
								<?php for ($m=1; $m <=12 ; $m++) { ?>
								<option value="<?php echo date('M', mktime(0, 0, 0, $m,1 )); ?>"><?php echo date('M', mktime(0, 0, 0, $m,1 )); ?></option>
								<?php } ?>
							</select>
						</div>
						<label class="control-label"></label>
						<div class="col-md-2">
							<select class="form-control" name="start_work_duration[]">
							@if($value->start_work_duration !="")
								<option value="{{$start_work_duration[1]}}">{{$start_work_duration[1]}}</option>
							@else
								<option value="">Year</option>
							@endif	
							
							<?php for ($i=date("Y"); $i>=2000; $i--) { ?>
								<option value="<?php echo $i;?>"><?php echo $i; ?></option>
							<?php } ?>
							</select>
						</div>
						<label class="col-md-1 control-label">To</label>
<?php 
$end_work_duration=explode(", ", $value->end_work_duration);
?>
						<div class="col-md-2">
							<select class="form-control" name="end_work_duration[]">
							@if($value->end_work_duration !="")
								<option value="{{$end_work_duration[0]}}">{{$end_work_duration[0]}}</option>
							@else
								<option value="">Month</option>
							@endif
							
								<?php for ($m=1; $m <=12 ; $m++) { ?>
								<option value="<?php echo date('M', mktime(0, 0, 0, $m,1 )); ?>"><?php echo date('M', mktime(0, 0, 0, $m,1 )); ?></option>
								<?php } ?>
							</select>
						</div>
						<label class="control-label"></label>
						<div class="col-md-2">
							<select class="form-control" name="end_work_duration[]">
							@if($value->end_work_duration !="")
								<option value="{{$end_work_duration[1]}}">{{$end_work_duration[1]}}</option>
							@else
								<option value="">Year</option>
							@endif
							
								<?php for ($i=date("Y"); $i>=2000; $i--) { ?>
								<option value="<?php echo $i;?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					</div>
				</div>
			</div>
@endforeach
<!-- end work experience -->

<!-- start previous experience -->
		<div class="previous_experience">
					<div class="portlet box green ">
						<div class="portlet-title">
							<div class="caption">
								<i class="glyphicon glyphicon-briefcase"></i>Previous Experience 
							</div>
						</div>
					</div>
			<div class="form-body">
			<div class="form-group col-md-2">
				 </div>
				 <div class="col-md-10">
				 <?php $i=0;?>
@foreach($previous_experience as $key => $value)
<input type="hidden" name="previous_id" value="{{$value->id}}">
				 <div class="
				 ditro{{$i++}}"><center><div class="portlet-title"><div class="caption"><b><big>Other Previous Experience</big></b></div></div></center><br></div>
				
                <div class="previous_experience_field">
					<div class="form-group">
						<label class="col-md-3 control-label">Job Title</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="pre_job_title[]" placeholder="Job Title" value="{{$value->pre_job_title}}">						
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Company Name</label>
						<div class="col-md-4">
							<input type="text" name="pre_company_name[]" class="form-control" placeholder="Company Name" value="{{$value->pre_company_name}}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Industry Of the Company</label>
						<div class="col-md-4">
							<select class="form-control" name="pre_industry[]" id="industryTypeId">						
								<option>Select Industry Type</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Functional Area of the Job</label>
						<div class="col-md-4">
							<select class="form-control" name="pre_functional_area[]" id="funcAreaId">
								<option>Select Functional Area</option>
							</select>
						</div>
					</div>
<?php 
$start_pre_duration=explode(",", $value->start_pre_duration);
?>
					<div class="form-group">
						<label class="col-md-3 control-label">Duration in this Job</label>
						<div class="col-md-2">
							<select class="form-control" name="start_pre_duration[]">
								@if($value->start_pre_duration !="")
								<option value="{{$start_pre_duration[0]}}">{{$start_pre_duration[0]}}</option>
							@else
								<option value="">Month</option>
							@endif
								<?php for ($m=1; $m <=12 ; $m++) { ?>
								<option value="<?php echo date('M', mktime(0, 0, 0, $m,1 )); ?>"><?php echo date('M', mktime(0, 0, 0, $m,1 )); ?></option>
								<?php } ?>
							</select>
						</div>
						<label class="control-label"></label>
						<div class="col-md-2">
							<select class="form-control" name="start_pre_duration[]">
							@if($value->start_pre_duration !="")
								<option value="{{$start_pre_duration[1]}}">{{$start_pre_duration[1]}}</option>
							@else
								<option value="">Year</option>
							@endif
							
								<?php for ($i=date("Y"); $i>=2000; $i--) { ?>
								<option value="<?php echo $i;?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
<?php 
$end_pre_duration=explode(",", $value->end_pre_duration);
?>
						<label class="col-md-1 control-label">To</label>
						<div class="col-md-2">
							<select class="form-control" name="end_pre_duration[]">
							@if($value->end_pre_duration !="")
								<option value="{{$end_pre_duration[0]}}">{{$end_pre_duration[0]}}</option>
							@else
								<option value="">Month</option>
							@endif
							
								<?php for ($m=1; $m <=12 ; $m++) { ?>
								<option value="<?php echo date('M', mktime(0, 0, 0, $m,1 )); ?>"><?php echo date('M', mktime(0, 0, 0, $m,1 )); ?></option>
								<?php } ?>
							</select>
						</div>
						<label class="control-label"></label>
						<div class="col-md-2">
							<select class="form-control" name="end_pre_duration[]">
							@if($value->end_pre_duration !="")
								<option value="{{$end_pre_duration[1]}}">{{$end_pre_duration[1]}}</option>
							@else
								<option value="">Year</option>
							@endif
							
								<?php for ($i=date("Y"); $i>=2000; $i--) { ?>
								<option value="<?php echo $i;?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Employer</label>
						<div class="col-md-4">
							<select class="form-control" name="pre_employer[]">
							@if($value->pre_employer !="")
								<option value="{{$value->pre_employer}}">{{$value->pre_employer}}</option>
							@else
								<option value="">Emloyer</option>
							@endif
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</div>
					</div>
<?php 
$pre_total_exp=explode(",", $value->pre_total_exp);
?>
					<div class="form-group">
							<label class="col-md-3 control-label">Total Experience</label>
							<div class="col-md-3">
								<select class="form-control" name="pre_total_exp[]">
								@if($value->pre_total_exp !="")
								<option value="{{$pre_total_exp[0]}}">{{$pre_total_exp[0]}}</option>
							@else
								<option value="">Year</option>
							@endif
									<?php for ($i=0; $i<=20; $i++) { ?>
									<option value="<?php echo $i; ?> Year"><?php echo $i; ?> Year</option>
									<?php } ?>
								</select>
							</div>
							<label class="control-label"></label>
							<div class="col-md-3">
								<select class="form-control" name="pre_total_exp[]">
								@if($value->pre_total_exp !="")
								<option value="{{$pre_total_exp[1]}}">{{$pre_total_exp[1]}}</option>
							@else
								<option value="">Month</option>
							@endif
									<?php for ($i=0; $i<12; $i++) { ?>
									<option value="<?php echo $i; ?> Month"><?php echo $i; ?> Month</option>
									<?php } ?>
								</select>
							</div>
					</div>
<?php 
$pre_salary=explode(",", $value->pre_salary);
?>
					<div class="form-group">
						<label class="col-md-3 control-label">Salary</label>
						<div class="col-md-3">
							<select class="form-control" name="pre_salary[]">
						@if($value->pre_salary !="")
								<option value="{{$pre_salary[0]}}">{{$pre_salary[0]}}</option>
							@else
								<option value="">Lakh</option>
							@endif
								<?php for ($i=1; $i<=10; $i++) { ?>
								<option value="<?php echo $i; ?> Lakh"><?php echo $i; ?>&nbsp;&nbsp;Lakh</option>
								<?php } ?>
							</select>
						</div>
						<label class="control-label"></label>
						<div class="col-md-3">
							<select class="form-control" name="pre_salary[]">
							@if($value->pre_salary !="")
								<option value="{{$pre_salary[1]}}">{{$pre_salary[1]}}</option>
							@else
								<option value="">Thousand</option>
							@endif
								<?php for ($i=1; $i<=19; $i++) { ?>
								<option value="<?php echo $i*5; ?> Thousand"><?php echo $i*5; ?> Thousand</option>
								<?php } ?>
							</select>
						</div>
					</div>
                </div>
                <div class="added_previous_experience_field"></div>
                @endforeach
					<div class="form-group">
						<div class="col-md-12">
						   <span class="col-md-3 col-md-offset-9 control-label add_more_btn add_previous_experience"><b>ADD MORE[+]</b></span>
						</div>
					</div>					
				</div>
				</div>
			</div>

<!-- end previous experience -->
<!-- education detail -->
@foreach($education_detail as $key => $value)
 <input type="hidden" name="education_id" value="{{$value->id}}">
					<div class="portlet box green ">
						<div class="portlet-title">
							<div class="caption">
								<i class="glyphicon glyphicon-book"></i>Education Details 
							</div>
						</div>
					</div>
		<div class="form-body">
			<div class="education_detail">
				<div class="form-group col-md-2">
				 </div>
				 <div class="col-md-10">
					<div class="form-group">
						<label class="col-md-3 control-label">Qualification Level</label>
						<div class="col-md-4">
							<select class="form-control" name="highest_qualification" id="qualiEduID">
								<option>Select Higher Education</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Education Specialization</label>
						<div class="col-md-4">
							<select class="form-control" name="edu_specialized" id="eduSpecId">
								<option>Select Education Specialization</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Institute Name</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="institute_name" placeholder="Institute Name" value="{{$value->institute_name}}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Year Of Passout</label>
						<div class="col-md-4">
							<select class="form-control" name="higher_passout_year">
								<?php for ($i=date("Y"); $i>=1990; $i--) { ?>
								<option value="<?php echo $i;?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Course Type</label>
						<div class="col-md-9">
							<div class="radio-list">
								<label class="radio-inline">
								<input type="radio" name="higher_course_type" id="optionsradios25" value="full" @if(old('higher_course_type',$value->higher_course_type)=="full") checked @endif>Full</label>
								<label class="radio-inline">
								<input type="radio" name="higher_course_type" id="optionsradios26" value="part time" @if(old('higher_course_type',$value->higher_course_type)=="part time") checked @endif>Part Time</label>
								<label class="radio-inline">
								<input type="radio" name="higher_course_type" id="optionsradios27" value="correspondence" @if(old('higher_course_type',$value->higher_course_type)=="correspondence") checked @endif>Correspondence</label>
							</div>
						</div>
					</div>
					@endforeach<br>
		<!--========== End Education Detail ====== -->

		<!--========== Start Preliminary Education ====== -->
		
		
					<div class="form-group">
						<div class="col-md-12">
							<center><b><big>Preliminary Education</big></b></center>
						</div>
					</div>
					<?php $j=0; ?>
	@foreach($preliminary_education as $key => $value)
		<input type="hidden" name="peliminary_id" value="{{$value->id}}">
					<div class="
				 ditro{{$j++}}">
					<center><div class="portlet-title"><div class="caption"><b><big>Other Education Detail</big></b></div></div></center><br></div>
				<div class="eduction_field">
					<div class="form-group">
						<label class="col-md-3 control-label">Qualification</label>
						<div class="col-md-4">
							<select class="form-control" name="pre_qualification[]" id="qualiEduID">
								<option></option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Education Specialization</label>
						<div class="col-md-4">
							<select class="form-control" name="pre_edu_specialized[]" id="eduSpecId">
								<option></option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">School / Institute Name</label>
						<div class="col-md-4">
							<input type="text" name="pre_institute[]" class="form-control" placeholder="School / Institute Name" value="{{$value->pre_institute}}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Country</label>
						<div class="col-md-4">
			<select class="con_st_cty form-control" name="pre_country[]" id="country2">
					@if($value->pre_country !="")
						<option value="{{$value->pre_country}}">{{CountryState::getCountries()[$value->pre_country]}}</option>
							@else
						 <option value="">Select Country</option> 		   
					@endif
					@foreach ($country as $key =>$item)
					@for($i = 0, $size = count($value); $i < $size; $i++)
							    <option value="{{$key}}">{{$item}}</option>
					@endfor
					@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12 address">
							<label class="col-md-3 control-label">State</label>
							<div class="col-md-4">
								<select class="form-control con_st_cty1" name="pre_state[]" id="state">
						@if($value->pre_state !="")
							<option value="{{$value->pre_state}}">{{CountryState::getStateName($value->pre_state, $value->pre_country)}}</option>
						@else
						 <option value="">Select State</option>		   
					@endif
								
									
								</select>
							</div>
							<label class="col-md-1 control-label">District</label>
							<div class="col-md-4">
								<select class="form-control con_st_cty2" name="pre_distt[]">
									<option value="">Select District</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Year Of Passout</label>
						<div class="col-md-3">
							<select class="form-control" name="pre_passout_year[]">
								<?php for ($i=date("Y"); $i>=1990; $i--) { ?>
								<option value="<?php echo $i;?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Course Type</label>
						<div class="col-md-9">
							<div class="radio-list">
								<label class="radio-inline">
								<input type="radio" name="pre_course_type0" id="optionsradios25" value="full" @if(old('pre_course_type0',$value->pre_course_type)=="full") checked @endif>Full</label>
								<label class="radio-inline">
								<input type="radio" name="pre_course_type0" id="optionsradios26" value="part time" @if(old('pre_course_type0',$value->pre_course_type)=="part time") checked @endif>Part Time</label>
								<label class="radio-inline">
								<input type="radio" name="pre_course_type0" id="optionsradios27" value="correspondence" @if(old('pre_course_type0',$value->pre_course_type)=="correspondence") checked @endif>Correspondence</label>
							</div>
						</div>
					</div>
				</div>
				<div class="added_eduction_field"></div>
				@endforeach
			</div>
					<div class="form-group">
						<div class="col-md-12">
							<span class="col-md-3 col-md-offset-9 control-label add_more_btn add_other_education"><b>ADD MORE[+]</b></span>
						</div>
					</div></div><br>

					
<!--========== END Preliminary Education ====== -->
<!-- decribe yourself -->
@foreach($describe_yourself as $key => $value)
<input type="hidden" name="describe_id" value="{{$value->id}}">
					<div class="form-group">
						<div class="col-md-12">
							<div class="col-md-6 col-md-offset-3">
								<label for="comment">Describe Yourself (in maximum 250 words)</label>
							</div>
							<div class="col-md-6 col-md-offset-3">
								<textarea class="form-control" name="describe_yourself" rows="5">{{$value->describe_yourself}}</textarea>
							</div>
						</div>	
					</div>
@endforeach
<!-- end decribe yourself -->
<!-- key skills -->

					<div class="form-group">
						<div class="col-md-5">
							<label class="col-md-10 control-label"><i class="glyphicon glyphicon-filter"></i>Key Skills</label>
						</div>
					</div>
					@foreach($key_skill as $key => $value)
		<input type="hidden" name="key_skill_id" value="{{$value->id}}">
					<div class="key_skill_field">
						<div class="form-group">
							<label class="col-md-5 control-label">Key Skills/Experience</label>
							<div class="col-md-2">
								<input type="text" name="key_skill[]" class="form-control" placeholder="key skills" value="{{$value->key_skill}}">
							</div>
							<label class="control-label"></label>
							<div class="col-md-2">
								<select class="form-control" name="key_skill_experience[]">
								@if($value->key_skill_experience !="")
								<option value="{{$value->key_skill_experience}}">{{$value->key_skill_experience}}</option>
								@else
								<option value="Experience">option 1</option>
								@endif
									<option value="option 1">option 1</option>
									<option value="option 2">option 2</option>
									<option value="option 3">option 3</option>
									<option value="option 4">option 4</option>
									<option value="option 5">option 5</option>
								</select>
							</div>
							<div class="col-md-2">
							ex: oracle,java,media,plainning etc.
							</div>
						</div>
					</div>
					<div class="added_key_skill_field"></div>
					@endforeach
					<div class="form-group">
						<div class="col-md-12">
							<span class="col-md-3 col-md-offset-10 add_more_btn add_key_skill"><b>ADD MORE[+]</b></span>
						</div>
					</div>



<!-- end key skills -->
					<div class="form-actions">
						<center><button type="button" value="back" onClick="history.go(-1);return true;" class="btn yellow">Back</button>
							<button type="submit" class="btn yellow my_class">Submit</button>
						</center>		
					</div>
				</div>
			</form>
		</div>

		<!-- end education detail -->

		</div>
	</div>
</div>

@endsection