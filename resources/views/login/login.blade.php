
@extends('search.includes.main')

@section('content')

@if ($errors->has('error_message'))
    {{ $errors->first('error_message') }}
@endif
	<!-- BEGIN LOGIN FORM -->
<div class="col-md-12 krug_login">
<div class="col-md-6">
<form class="login-form" action="{{ url('/login') }}" method="post">
	 {{ csrf_field() }}
		<div class="form-title">
			<span class="form-title">Sign In</span>
			
		</div>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required autofocus>
			@if ($errors->has('email') && Session::get('verifyLogin')=='login')
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
           	@endif
		</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required>
		@if ($errors->has('password')&& Session::get('verifyLogin')=='login')
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
		</div>
		<div class="form-actions">
			<button type="submit" class="btn green-meadow">Login</button>
		</div>
		<div class="form-actions">
			<div class="pull-left">
				<label class="rememberme check">
				<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>Remember me </label>
			</div>
			<div class="pull-right forget-password-block">
				<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
			</div>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
<form class="forget-form" action="{{ url('/password/email') }}" method="post">
{{ csrf_field() }}
		<div class="form-title">
			<span class="form-title">Forget Password ?</span><br>
			<span class="form-subtitle">Enter your e-mail to reset it.</span>
		</div>
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
               		<strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
		</div>
		<div class="form-actions">
			
			<button type="submit" class="btn green-meadow">Submit</button>
			<button type="button" id="back-btn" class="btn blue btn-block">Back</button>
		</div>
	</form>
	</div>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	<div class="col-md-6">
	<form class="register-form" action="{{ url('/register') }}" method="post">
	 {{ csrf_field() }}
		<div class="form-title">
	<span class="form-title">Sign Up</span>
		</div>
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			<label class="control-label visible-ie8 visible-ie9">Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>
		</div>
		
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" id="email" />
		</div>
		@if ($errors->has('email')&& Session::get('verifyLogin')=='register')
            <span class="help-block">
               {{ $errors->first('email') }}
            </span>
        @endif
		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
	 @if ($errors->has('password')&& Session::get('verifyLogin')=='register')
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
		</div>
		<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
						<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
					</div>
		<div class="form-actions">
		<!-- 	<button type="button" id="register-back-btn" class="btn btn-default">Back</button> -->
			<button type="submit" id="register-submit-btn" class="btn green-meadow">Register</button>
			<a href="{{ url('/auth/facebook') }}"><button type="button" class="btn blue btn-block">Register with Facebook</button></a>
		</div>
	</form>
	</div>
	<!-- END REGISTRATION FORM -->
</div>

@endsection
