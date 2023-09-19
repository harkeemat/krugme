@section('content')

<div class="col-md-12">

	<form class="group-register-form" action="{{ url('add_group') }}" method="post">
	 {{ csrf_field() }}
    <div class="form-title">
	<span class="form-title">Register New Group</span>
		</div>
	<input type="hidden" name="admin_id" value="{{Auth::user()->id}}">
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Group Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Group Name" name="name" required autofocus>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Slug</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Slug" name="slug" required>
		</div>
		<div class="form-actions">
		    <button type="reset" id="register-back-btn" class="btn btn-default">Reset</button>
			<button type="submit" id="register-submit-btn" class="btn green-meadow">Register</button>
		</div>
	</form>
</div>

@endsection

