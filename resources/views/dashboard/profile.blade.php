@section('content')

<style type="text/css">
  .right-sidebar {
  display: none;
}
.content-area {
  padding: 0px 30px 0px 30px;
}
</style>

<?php $user = Auth::user();?>

  <!-- Begin page content -->
<div class="col-md-9 content-area">
  <div class="row">
            <div class="col-md-12">
              <div class="bg-picture" style="background-image:url('<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/cover.jpg')">
                <span class="bg-picture-overlay"></span><!-- overlay -->
                <!-- meta -->
                <div class="box-layout meta bottom">
                  <div class="col-md-6 clearfix">
                    <span class="img-wrapper pull-left m-r-15">
                      <img src="{{asset('uploads/'.$user->avatar.'')}}" alt="" style="width:64px" class="br-radius">
                    </span>
                    <div class="media-body">
                      <h3 class="text-white mb-2 m-t-10 ellipsis">{{ $user->name }}</h3>
                      <h5 class="text-white"> @vicky</h5>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="pull-right">
                    <a class="btn btn-azure" href="{{url('edit_profile')}}" aria-expanded="false"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
<!--                       <div class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle btn btn-azure" href="#" aria-expanded="false"> Following <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Poke</a></li>
                            <li><a href="#">Private message</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Unfollow</a></li>
                        </ul>
                      </div> -->
                    </div>
                  </div>
                </div><!--/ meta -->
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom profile-tabs">
              <li role="presentation" class="active"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">About</a></li>
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Friends <span class="my_label label label-info pull-right r-activity">{{$user->getFriendsCount()}}</span></a></li>
              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Photos</a></li>
            </ul>


            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Timeline -->
              <div role="tabpanel" class="tab-pane active" id="timeline">
                <div class="row">
                  <div class="col-md-5">
                    <div class="widget">
                      <div class="widget-header">
                        <h3 class="widget-caption">About</h3>
                      </div>
                      <div class="widget-body bordered-top bordered-sky">
                        <ul class="list-unstyled profile-about margin-none">
                       
                          <li class="padding-v-5">
                            <div class="row">
                              <div class="col-sm-4"><span class="text-muted">Date of Birth</span></div>
                              <div class="col-sm-8">{{$user->getPersonalDetail()->dob}}</div>
                            </div>
                          </li>
                          <li class="padding-v-5">
                            <div class="row">
                              <div class="col-sm-4"><span class="text-muted">Job</span></div>
                              <div class="col-sm-8">{{$user->getWorkExperience()->work_job_title}}</div>
                            </div>
                          </li>
                          <li class="padding-v-5">
                            <div class="row">
                              <div class="col-sm-4"><span class="text-muted">Gender</span></div>
                              <div class="col-sm-8">{{$user->getPersonalDetail()->gender}}</div>
                            </div>
                          </li>
                          <li class="padding-v-5">
                            <div class="row">
                              <div class="col-sm-4"><span class="text-muted">Lives in</span></div>
                              <div class="col-sm-8">{{$user->getCityName($user->getPersonalDetail()->current_location)}} ({{CountryState::getCountries()[$user->getPersonalDetail()->country]}})</div>
                            </div>
                          </li>
                          <li class="padding-v-5">
                            <div class="row">
                              <div class="col-sm-4"><span class="text-muted">Rating</span></div>
                              <div class="col-sm-8">
                                <!-- stars -->
                                <input id="input-id" type="number" class="rating" data-size="xs" value="{{$user->getAuthRating()}}" disabled >

                                <!-- .stars -->
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>



                    <div class="widget widget-friends">
                      <div class="widget-header">
                        <h3 class="widget-caption">Friends <span class="my_widget_label label label-info pull-right r-activity">{{$user->getFriendsCount()}}</span></h3>
                      </div>
                      <div class="widget-body bordered-top  bordered-sky">
                        <div class="row">
                          <div class="col-md-12">
                            <ul class="img-grid" style="margin: 0 auto;">
                            @foreach ($kruglist as $value)
                              <li>
                                <a href="{{url('fprofile/'.$value->id.'')}}">
                                  <img src="{{ asset('uploads/'.$value->avatar.'')}}" alt="image">
                                </a>
                              </li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="widget">
                      <div class="widget-header">
                        <h3 class="widget-caption">Groups <span class="my_widget_label label label-info pull-right r-activity">{{$user->getGroupsCount()}}</span></h3>
                      </div>
                      <div class="widget-body bordered-top bordered-sky">
                        <div class="card">
                          <div class="content">
                            <ul class="list-unstyled team-members">
                              @foreach($user->getGroups($perPage = 3) as $value)
                              <li>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/likes-1.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                      {{$value->name}}
                                    </div>
                        
                                    <div class="col-xs-3 text-right">
                                        <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user"></i></btn>
                                    </div>
                                </div>
                              </li>
                              @endforeach
                            </ul>
                          </div>
                        </div>  
                      </div>
                    </div>
                  </div>

                  <!--============= timeline posts-->
                  <div class="col-md-7">
                    <div class="row">
                      <!-- left posts-->
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12">
                          <!-- post state form -->
                            <div class="box profile-info n-border-top">
                              <form>
                                  <textarea class="form-control input-lg p-text-area" rows="2" placeholder="Whats in your mind today?"></textarea>
                              </form>
                              <div class="box-footer box-form">
                                  <button type="button" class="btn btn-azure pull-right">Post</button>
                                  <ul class="nav nav-pills">
                                      <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                                      <li><a href="#"><i class="fa fa-camera"></i></a></li>
                                      <li><a href="#"><i class=" fa fa-film"></i></a></li>
                                      <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                                  </ul>
                              </div>
                            </div><!-- end post state form -->

                            <!--   posts -->
                            <div class="box box-widget">
                              <div class="box-header with-border">
                                <div class="user-block">
                                  <img class="img-circle" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="User Image">
                                  <span class="username"><a href="#">John Breakgrow jr.</a></span>
                                  <span class="description">Shared publicly - 7:30 PM Today</span>
                                </div>
                              </div>

                              <div class="box-body" style="display: block;">
                                <img class="img-responsive show-in-modal" src="img/Post/young-couple-in-love.jpg" alt="Photo">
                                <p>I took this photo this morning. What do you guys think?</p>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                <span class="pull-right text-muted">127 likes - 3 comments</span>
                              </div>
                              <div class="box-footer box-comments" style="display: block;">
                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-2.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                  </div>
                                </div>

                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Luna Stark
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                  </div>
                                </div>
                              </div>
                              <div class="box-footer" style="display: block;">
                                <form action="#" method="post">
                                  <img class="img-responsive img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="Alt Text">
                                  <div class="img-push">
                                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                  </div>
                                </form>
                              </div>
                            </div><!--  end posts-->


                            <!-- post -->
                            <div class="box box-widget">
                              <div class="box-header with-border">
                                <div class="user-block">
                                  <img class="img-circle" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="User Image">
                                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                                  <span class="description">Shared publicly - 7:30 PM Today</span>
                                </div>
                              </div>
                              <div class="box-body">
                                <p>Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind
                                texts. Separated they live in Bookmarksgrove right at</p>

                                <p>the coast of the Semantics, a large language ocean.
                                A small river named Duden flows by their place and supplies
                                it with the necessary regelialia. It is a paradisematic
                                country, in which roasted parts of sentences fly into
                                your mouth.</p>

                                <div class="attachment-block clearfix">
                                  <img class="attachment-img show-in-modal" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/2.jpg" alt="Attachment Image">
                                  <div class="attachment-pushed">
                                  <h4 class="attachment-heading"><a href="http://www.bootdey.com/">Lorem ipsum text generator</a></h4>
                                  <div class="attachment-text">
                                  Description about the attachment can be placed here.
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                  </div>
                                  </div>
                                </div>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                <span class="pull-right text-muted">45 likes - 2 comments</span>
                              </div>
                              <div class="box-footer box-comments">
                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-5.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                  </div>
                                </div>
                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-6.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Nora Havisham
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using
                                    'Content here, content here', making it look like readable English.
                                  </div>
                                </div>
                              </div>
                              <div class="box-footer">
                                <form action="#" method="post">
                                  <img class="img-responsive img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="Alt Text">
                                  <div class="img-push">
                                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                  </div>
                                </form>
                              </div>
                            </div><!-- end post -->

                            <!--  posts -->
                            <div class="box box-widget">
                              <div class="box-header with-border">
                                <div class="user-block">
                                  <img class="img-circle" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="User Image">
                                  <span class="username"><a href="#">John Breakgrow jr.</a></span>
                                  <span class="description">Shared publicly - 7:30 PM Today</span>
                                </div>
                              </div>

                              <div class="box-body" style="display: block;">
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac iaculis ligula, eget efficitur nisi. In vel rutrum orci. Etiam ut orci volutpat, maximus quam vel, euismod orci. Nunc in urna non lectus malesuada aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam dignissim mi ac metus consequat, a pharetra neque molestie. Maecenas condimentum lorem quis vulputate volutpat. Etiam sapien diam
                                </p>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                <span class="pull-right text-muted">127 likes - 3 comments</span>
                              </div>
                              <div class="box-footer box-comments" style="display: block;">
                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-2.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                  </div>
                                </div>

                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Luna Stark
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                  </div>
                                </div>
                              </div>
                              <div class="box-footer" style="display: block;">
                                <form action="#" method="post">
                                  <img class="img-responsive img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="Alt Text">
                                  <div class="img-push">
                                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                  </div>
                                </form>
                              </div>
                            </div><!--  end posts -->

                            <!--   posts -->
                            <div class="box box-widget">
                              <div class="box-header with-border">
                                <div class="user-block">
                                  <img class="img-circle" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="User Image">
                                  <span class="username"><a href="#">John Breakgrow jr.</a></span>
                                  <span class="description">Shared publicly - 7:30 PM Today</span>
                                </div>
                              </div>

                              <div class="box-body" style="display: block;">
                                <img class="img-responsive pad show-in-modal" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/3.jpg" alt="Photo">
                                <p>I took this photo this morning. What do you guys think?</p>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                <span class="pull-right text-muted">127 likes - 3 comments</span>
                              </div>
                              <div class="box-footer box-comments" style="display: block;">
                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-2.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                  </div>
                                </div>

                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="User Image">
                                  <div class="comment-text">
                                    <span class="username">
                                    Luna Stark
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                  </div>
                                </div>
                              </div>
                              <div class="box-footer" style="display: block;">
                                <form action="#" method="post">
                                  <img class="img-responsive img-circle img-sm" src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-3.jpg" alt="Alt Text">
                                  <div class="img-push">
                                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                  </div>
                                </form>
                              </div>
                            </div><!--  end posts -->
                          </div>
                        </div>
                      </div><!-- end left posts-->
                    </div>
                  </div><!-- end timeline posts-->
                </div>
              </div><!-- end timeline -->
              <!-- about -->
              <div role="tabpanel" class="tab-pane" id="profile">
                <div class="row container-contact">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4 col-md-5 col-xs-12">
                        <div class="row">
                          <div class="col-xs-3">
                            Email:
                          </div>
                          <div class="col-xs-9">
                            {{$user->email}}                            
                          </div>
                          <div class="col-xs-3">
                            Phone:
                          </div>
                          <div class="col-xs-9">
                           {{$user->getPersonalDetail()->mobile_no}} 
                          </div>
                          <div class="col-xs-3">
                            Address:
                          </div>
                          <div class="col-xs-9">
                            {{$user->getCityName($user->getPersonalDetail()->current_location)}}({{CountryState::getCountries()[$user->getPersonalDetail()->country]}})
                          </div>
                          <div class="col-xs-3">
                            Birthday:
                          </div>
                          <div class="col-xs-9">
                            {{$user->getPersonalDetail()->dob}}
                          </div>
                          <div class="col-xs-3">
                            URL:
                          </div>
                          <div class="col-xs-9">
                            http://yourdomain.com
                          </div>
                          <div class="col-xs-3">
                           Job:
                          </div>
                          <div class="col-xs-9">
                            {{$user->getWorkExperience()->work_job_title}}
                          </div>
                          <div class="col-xs-3">
                           Lives in:
                          </div>
                          <div class="col-xs-9">
                           {{$user->getCityName($user->getPersonalDetail()->current_location)}} ({{CountryState::getCountries()[$user->getPersonalDetail()->country]}})
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-7 col-xs-12">
                        <p class="contact-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- end about -->

              <!-- friends -->
              <div role="tabpanel" class="tab-pane" id="messages">
                <div class="row">
                @foreach ($kruglist as $value)
                  <div class="col-md-3">
                    <div class="contact-box center-version">
                      <a href="{{url('fprofile/'.$value->id.'')}}">
                            <div class="custom_star"><i class="fa fa-star" aria-hidden="true"></i> @if(!$value->getAuthRating()){{0}} @else {{$value->getAuthRating()}} @endif Star</div>
                        <img alt="image" class="img-circle" src="{{ asset('uploads/'.$value->avatar.'')}}">
                        <h3 class="nameUser m-b-xs"><strong>{{ $value->name }}</strong></h3>
          
                        <div class="font-bold">Developer</div>
                      </a>
                      <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                          <a href="{{url('messages/'.$value->id.'')}}" class="btn btn-xs btn-white"><i class="fa fa-envelope"></i>Send Messages</a>
                          <a href="{{url('remove/'.$value->id.'')}}" class="btn btn-xs btn-white"><i class="fa fa-chain-broken" aria-hidden="true"></i> Unfollow</a>
                        </div>
                      </div>
                    </div>
                  </div>
                   @endforeach

                </div>
              </div><!-- end friends -->
              <!-- photos -->
              <div role="tabpanel" class="tab-pane" id="settings">
                <div class="row">
                  <div class="col-md-12">
                    <ul class="gallery-list">
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/1.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/2.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/3.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/4.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/5.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/6.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/7.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/8.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/9.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/1.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/2.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/3.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/4.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/5.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="image-container">
                          <div class="image">
                              <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/6.jpg" alt="">
                          </div>
                          <div class="btn-list">
                            <a href="view_photo.html" class="btn btn-white btn-xs"><i class="fa fa-search-plus"></i></a>
                          </div>
                          <div class="info">
                            <h5>Quisque a eleifend est, quis accumsan metus.</h5>
                            <small class="text-muted">24/08/2015</small>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div><!-- end photos -->
            </div>


</div>
</div>

@endsection
