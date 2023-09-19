@extends('search.includes.main')

@section('content')
<div class="col-md-12">
  <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<form class="login-form" action="{{ url('/password/reset') }}" method="post">
	 {{ csrf_field() }}
	  <input type="hidden" name="token" value="{{ $token }}">
		<div class="form-title">
			<span class="form-title">Reset Password</span>
		</div>
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" id="email" value="{{ $email or old('email') }}" required autofocus>
			@if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
		</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required>
		  @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
		</div>
	<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
						<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
						<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required/>
						 @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
	</div>
		<div class="form-actions">
			<button type="submit" class="btn green-meadow">Login</button>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->

	</div>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
	<!-- END REGISTRATION FORM -->
</div>
@endsection