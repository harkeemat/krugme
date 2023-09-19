@section('content')
<div class="team-block content content-center margin-bottom-40" id="team">
      <h2 id="dash_heading">Explore <strong>the Commmunity</strong></h2>
      <h4 id="dash_subheading">{{$group->name}} Community List</h4>
      <div class="row">
@foreach ($content as $key =>$value)

	<div class="col-md-4 col-sm-6 col-xs-6 item">
    <div class="dash_krug">
	 <div id="nameUser"><a href="{{url('fprofile/'.$value->id.'')}}">{{ $value->name }}</a></div>
	 <a href="{{url('fprofile/'.$value->id.'')}}">
	@if(!$value->avatar=='')
	 <img class="krugimg" src="{{ asset('uploads/'.$value->avatar.'')}}">
	@else 
	 <img class="krugimg" src="{{asset('uploads/image.jpg')}}">
	@endif
	</a>
	<div id="nameUser">Developer</div>
    <div class="profile-userbuttons">
    @if($value->isGroupWith($group))
    <a href=""><button type="button" class="btn blue friend"><i class="fa fa-user"></i> Member</button></a>
    @elseif($value->hasGroupRequestFrom($group))
    <a href="{{url('group_request')}}"><button type="button" class="btn blue pending"><i class="fa fa-sign-in"></i> Request Sent</button></a>
     @elseif($value->id == $group->admin_id)
    <a href=""><button type="button" class="btn blue pending">Admin</button></a>
    @else
	<a href="{{ url('member/'.$value->id.'/group/'.$group->id.'') }}"><button class="btn blue add"><i class="fa fa-user-plus"></i> Add Member</button></a>
	@endif

	</div>
	</div>
	 </div>
@endforeach
</div>
</div>
@endsection







