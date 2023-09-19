
@extends('search.includes.main')

@section('content')
<p id="searchTop">Search the right Employee for your Business !</p>
<div class="col-md-12">
<form action="#" class="login-form" method="post">
	<div class="col-md-3 col-sm-3">
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="job_title" placeholder="Job Title"><br>
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="user" placeholder="Industry">
	</div>
	<div class="col-md-3 col-sm-3">
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="user2" placeholder="Location"><br>
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="user" placeholder="Salary Package">
	</div>
	<div class="col-md-3 col-sm-3">
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="user3" placeholder="Experience"><br>
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="user" placeholder="Functional Area">
	</div>
	<div class="col-md-3 col-sm-3">
		<button type="button" class="btn blue btn-block">KRUG SEARCH</button>
	</div>
</form>
</div>
<!-- <a href="javascript:;" id="searchBottom">Advance Search [+] </a> -->

<link href="<?php echo asset('resources/assets/admin/pages/css/advancesearch.css'); ?>" rel="stylesheet" type="text/css"/>

@endsection
