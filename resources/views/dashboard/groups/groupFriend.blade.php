@section('content')
<div class="team-block content content-center margin-bottom-40" id="team">
      <h2 id="dash_heading">Explore <strong>the Commmunity</strong></h2>
      <h4 id="dash_subheading">Krug Community List</h4>
      <div class="row">
@foreach($content as $key => $value)
@foreach ($value as $item)
	<div class="col-md-4 col-sm-6 col-xs-6 item">
    <div class="dash_krug">
	 <div id="nameUser"><a href="{{url('fprofile/'.$item->id.'')}}">{{ $item->name }}</a></div>
	<a href="{{url('fprofile/'.$item->id.'')}}">
	@if(!$item->avatar=='')
	 <img class="krugimg" src="{{ asset('uploads/'.$item->avatar.'')}}">
	@else 
	 <img class="krugimg" src="{{asset('uploads/image.jpg')}}">
	@endif  
	</a>
	 <div id="nameUser">Developer</div>
	 <div class="profile-userbuttons">
@if(Auth::user()->id == $admin_id)
	<a href="{{url('ungroup_member/'.$item->id.'/group/'.request()->id.'')}}"><button class="btn blue remove">Ungroup</button></a>
	@else
	<a href=""><button class="btn blue friend"><i class="fa fa-user-plus"></i> Member</button></a>
	@endif
	
	 </div>
	 </div>
	 </div>
@endforeach
@endforeach
</div></div>

@endsection
