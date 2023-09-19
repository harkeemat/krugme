@section('content')
<div class="col-md-6">
  <div class="row">
@foreach ($kruglist as $value)
     <div class="col-md-4">
    <div class="contact-box center-version">
      <a href="{{url('fprofile/'.$value->id.'')}}">
        <div class="custom_star"><i class="fa fa-star" aria-hidden="true"></i> @if(!$value->getAuthRating()){{0}} @else {{$value->getAuthRating()}} @endif Star</div>
        <img alt="image" class="img-circle" src="{{ asset('uploads/'.$value->avatar.'')}}">
        <h3 class="nameUser"><strong>{{ $value->name }}</strong></h3>

        <div class="font-bold">Graphics designer</div>
      </a>
      <div class="contact-box-footer">
        <div class="m-t-xs btn-group">
          <a href="{{url('messages')}}" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
          <a class="btn btn-xs btn-white"><i class="fa fa-chain-broken" aria-hidden="true"></i> Unfollow</a>
        </div>
      </div>
    </div>
</div>
@endforeach
</div>
</div>
@endsection
