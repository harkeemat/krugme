@section('content')
    <div class="team-block content content-center margin-bottom-40" id="team">
      <h2 id="dash_heading">Explore <strong>the Krug</strong></h2>
      <h4 id="dash_subheading">Outer Krug List</h4>
      <div class="row">
     @foreach ($sender as $key)
     @foreach ($key as $value => $item)
       	<div class="col-md-4 col-sm-6 col-xs-6 item">
        <div class="dash_krug">
            <div id="nameUser"><a href="{{url('fprofile/'.$item->id.'')}}">{{ $item->name }}</a></div>
        <a href="{{url('fprofile/'.$item->id.'')}}">
        @if(!$item->avatar=='')
        	<img class="krugimg" src="{{ asset('uploads/'.$item->avatar.'')}}">
        @else
        	<img class="krugimg" src="{{asset('uploads/image.jpg')}}">
        @endif
        </a><br>
            <div id="nameUser">Developer</div>

          <div id="mutual">
          {{ Auth::user()->getMutualFriendsCount($item)}}
           Mutual Friends
           <?php $mutual= Auth::user()->getMutualFriends($item) ?>
            @foreach($mutual as $key)
            <a href="{{url('fprofile/'.$key->id.'')}}">{{$key->name}}</a>
            @endforeach
          </div>
          <div class="profile-userbuttons">
            <a href="{{url('accept/'.$item->id.'')}}" class="btn blue accept"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Accept</a>
            <a href="{{url('deny/'.$item->id.'')}}" class="btn blue reject">
            <i class="fa fa-trash" aria-hidden="true"></i> Reject</a>
        </div>
        	</div>
            </div>
     @endforeach
     @endforeach
        </div>
        </div>
    
@endsection
