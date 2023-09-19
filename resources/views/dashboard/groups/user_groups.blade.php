@section('content')
<div class="team-block content content-center margin-bottom-40" id="team">
      <h2 id="dash_heading">Explore <strong>the Commmunity</strong></h2>
      <h4 id="dash_subheading">Krug Community List</h4>
      <div class="row">
@foreach($groups as $value)
<div class="col-md-4 col-sm-6 col-xs-6 item">
    <div class="dash_krug">
 <div id="nameUser"><a href="{{url('group_profile/'.$value->id.'')}}">{{$value->name}}</a></div> 
	 <img class="krugimg" src="{{asset('resources/assets/admin/layout2/img/group.jpeg')}}">
	 <div id="nameUser"></div>
	 <div id="mutual"><a href="{{url('mutualmember/'.$value->id.'')}}">
	 {{Auth::user()->getFriendsCount($value->slug)}} Friends</a> | {{Auth::user()->getMemberCount($value)}} Members </div>
	 <div class="profile-userbuttons">
	 @if($value->admin_id == Auth::user()->id)
	 <a href="{{url('group_profile/'.$value->id.'')}}"><button class="btn blue pending"><i class="fa fa-user"></i> Admin</button></a>

	 @elseif(Auth::user()->isGroupWith($value))
	 <a href="{{url('group_profile/'.$value->id.'')}}"><button class="btn blue friend"><i class="fa fa-user"></i> Member</button></a>
	 @else
	 <a href="{{ url('member/'.Auth::user()->id.'/group/'.$value->id.'') }}"><button class="btn blue add"><i class="fa fa-user-plus"></i> Join Group</button></a>
	 @endif
	 </div>
</div>
</div>

@endforeach

</div>
</div>
<div class="profile-userbuttons">
<a href="{{ url('group_register') }}"><button class="btn blue">Add More Groups</button></a>
<a href="{{ url('group_request') }}"><button class="btn blue">Group Requests</button></a>
</div>


@endsection







