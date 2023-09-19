@section('content')
<div class="col-md-6">
  <div class="row">
@foreach($content as $value)
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="media">
                  <div class="pull-left">
                    <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-1.jpg" alt="people" class="media-object img-circle">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading margin-v-5"><a href="#">{{$value->name}}</a></h4>
                    <div class="profile-icons">
                      <span><i class="fa fa-users"></i> 372</span>
                      <span><i class="fa fa-photo"></i> 43</span>
                      <span><i class="fa fa-video-camera"></i> 3</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <p class="common-friends">Common Friends</p>
                <div class="user-friend-list">
                  <a href="#">
                    <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-5.jpg" alt="people" class="img-circle">
                  </a>
                  <a href="#">
                    <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-6.jpg" alt="people" class="img-circle">
                  </a>
                  <a href="#">
                    <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/woman-6.jpg" alt="people" class="img-circle">
                  </a>
                  <a href="#">
                    <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/woman-4.jpg" alt="people" class="img-circle">
                  </a>
                </div>
              </div>
              <div class="panel-footer">
                <a href="#" class="btn btn-azure btn-sm">Follow <i class="fa fa-share"></i></a>
              </div>
            </div>
          </div>

@endforeach


</div>
</div>
@endsection







