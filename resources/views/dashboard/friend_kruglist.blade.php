@section('content')
    
<div class="team-block content content-center margin-bottom-40" id="team">
      <h2 id="dash_heading">Explore <strong>the Krug</strong></h2>
      <h4 id="dash_subheading">Krug List</h4>
      <div class="row">
  
    @foreach ($kruglist as $value)
    <div class="col-md-4 col-sm-6 col-xs-6 item">
        <div class="dash_krug">
        <div id="nameUser"><a href="{{url('fprofile/'.$value->id.'')}}">{{ $value->name }}</a></div>
    
    <a href="{{url('fprofile/'.$value->id.'')}}">
    @if(!$value->avatar=='')
        <img class="krugimg" src="{{ asset('uploads/'.$value->avatar.'')}}">
    @else
        <img class="krugimg" src="{{asset('uploads/image.jpg')}}">
    @endif
    </a><br>
    <div id="nameUser">Developer</div>
          <div id="mutual">{{ Auth::user()->getMutualFriendsCount($value)}} Mutual Friends
          <?php $mutual= Auth::user()->getMutualFriends($value) ?>
            @foreach($mutual as $key)
            <a href="{{url('fprofile/'.$key->id.'')}}">{{$key->name}}</a>
            @endforeach </div>
          <div class="profile-userbuttons">
          @if(Auth::user()->isFriendWith($value))
          <button type="button" class="btn blue friend"><i class="fa fa-user"></i> Friend</button>

          @elseif(Auth::user()->id == $value->id)

          <a href="{{url('fprofile/'.$value->id.'')}}"><button type="button" class="btn blue pending"><i class="fa fa-user"></i> You</button></a>

          @elseif($value->isBlockedBy(Auth::user()))
          <a href="{{url('unblock/'.$value->id.'')}}"><button type="button" class="btn blue add"><i class="fa fa-power-off"></i> Unblock Friend</button></a>

          @elseif(Auth::user()->hasSentFriendRequestTo($value))

          <a href="{{url('fprofile/'.$value->id.'')}}"><button type="button" class="btn blue pending"><i class="fa fa-sign-in"></i> Request Sent</button></a>

           @elseif(Auth::user()->hasFriendRequestFrom($value))

          <a href="{{url('fprofile/'.$value->id.'')}}"><button type="button" class="btn blue pending"><i class="fa fa-share"></i> Request Pending</button></a>
          @else
          <a href="{{url('kruglist/'.$value->id.'')}}"><button type="button" class="btn blue add"><i class="fa fa-user-plus"></i> Add Friend</button></a>
          @endif
          </div>
        </div>
        </div>
    @endforeach
   </div>
   </div>
    
@endsection
