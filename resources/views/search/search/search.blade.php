
@extends('search.includes.main')

@section('content')
<p id="searchTop">Search the right Employee for your Business !</p>
<div class="col-md-12">
<form action="#" class="login-form" method="post">
	<div class="col-md-3 col-sm-3">
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="job_title" placeholder="Job Title">
	</div>
	<div class="col-md-3 col-sm-3">
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="location" placeholder="Location">
	</div>
	<div class="col-md-3 col-sm-3">
		<input class="form-control form-control-solid placeholder-no-fix" type="text" name="experience" placeholder="Experience">
	</div>
	<div class="col-md-3 col-sm-3">
		<button type="button" class="btn blue btn-block">KRUG SEARCH</button>
	</div>
</form>
</div>
<a href="advancesearch" id="searchBottom">Advance Search [+] </a>

<link href="<?php echo asset('resources/assets/admin/pages/css/search1.css'); ?>" rel="stylesheet" type="text/css"/>

@endsection
