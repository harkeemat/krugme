@section('content')

<div class="team-block content content-center margin-bottom-40" id="team">
      <h2 id="dash_heading">Explore <strong>the Commmunity</strong></h2>
      <h4 id="dash_subheading">{{$group->name}} Member's List</h4>
      <div class="row">

@foreach($member as $key => $value)

@foreach ($value as $item)

	<div class="col-md-4 col-sm-6 col-xs-6 item">
    <div class="dash_krug">
	 <div id="nameUser"><a href="{{url('fprofile/'.$item->id.'')}}">{{ $item->name }}</a>
   </div>


	<a href="{{url('fprofile/'.$item->id.'')}}">
	@if(!$item->avatar=='')
	 <img class="krugimg" src="{{ asset('uploads/'.$item->avatar.'')}}">
	@else 
	 <img class="krugimg" src="{{asset('uploads/image.jpg')}}">
	@endif  
	</a>
{{$item->id}}
	 <div id="nameUser">Developer</div>
    <div class="rate_friend">   

         <input  name="input-3"  value="0" class="rating employeeData" onchange="getEmployeeId(id ='<?php echo $item->id; ?>')" >
   </div>
   <input type="hidden" value="{{$group->id}}" id="group_id">
	 <div class="profile-userbuttons">
	@if(Auth::user()->isFriendWith($item))
          <a href="{{url('fprofile/'.$item->id.'')}}"><button type="button" class="btn blue friend"><i class="fa fa-user"></i> Friend</button></a>

          @elseif($item->isBlockedBy(Auth::user()))
          <a href="{{url('unblock/'.$item->id.'')}}"><button type="button" class="btn blue add"><i class="fa fa-power-off"></i> Unblock Friend</button></a>

          @elseif(Auth::user()->hasSentFriendRequestTo($item))

          <a href="{{url('fprofile/'.$item->id.'')}}"><button type="button" class="btn blue pending"><i class="fa fa-sign-in"></i> Request Sent</button></a>

          @elseif(Auth::user()->hasFriendRequestFrom($item))

          <a href="{{url('fprofile/'.$item->id.'')}}"><button type="button" class="btn blue pending"><i class="fa fa-share"></i> Request Pending</button></a>

           @elseif(Auth::user()->id == $item->id)

          <a href="{{url('fprofile/'.$item->id.'')}}"><button type="button" class="btn blue pending">You</button></a>

          @else
          <a href="{{url('kruglist/'.$item->id.'')}}"><button type="button" class="btn blue add"><i class="fa fa-user-plus"></i> Add Friend</button></a>
          @endif
	 </div>
	 </div>
	 </div>
@endforeach
@endforeach
</div></div>

@endsection
