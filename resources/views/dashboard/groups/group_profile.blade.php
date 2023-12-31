@section('content')
<style type="text/css">
  .right-sidebar {
  display: none;
}

</style>
    <!-- Begin page content -->
<div class="col-md-9">
  <div class="row">

            <div class="col-md-12">
              <div class="widget">
                <div class="cover-photo">
                  <div class="group-timeline-img">
                      <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/bootsrap-cover2.png" alt="">
                  </div>
                  <div class="group-name">
                      <h2><a href="#">Boostrap lovers</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <div class="row">
            <!-- group posts -->
            <div class="col-md-7">
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
              </div>

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
            </div><!-- end group posts -->


            <!-- group about -->
            <div class="col-md-5">
              <div class="widget">
                <div class="widget-header">
                  <h3 class="widget-caption">Actions</h3>
                </div>
                <div class="widget-body bordered-top bordered-sky">
                    <button type="button" class="btn btn-success"><i class="fa fa-user-plus"></i>Join</button>
                    <button type="button" class="btn btn-azure"><i class="fa fa-share"></i>Share</button>
                    <button type="button" class="btn btn-azure"><i class="fa fa-user-times"></i>Leave grup</button>
                </div>
              </div>

              <div class="widget">
                <div class="widget-header">
                  <h3 class="widget-caption">Description</h3>
                </div>
                <div class="widget-body bordered-top bordered-sky">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam accumsan mauris, sit amet facilisis risus pretium a. Donec a erat ex. Sed facilisis nulla ut elit faucibus, ut mattis augue convallis. Integer consequat feugiat turpis, ut cursus sem consectetur et. Nulla at libero nisl.
                </div>
              </div> 

              <div class="widget widget-friends">
                <div class="widget-header">
                  <h3 class="widget-caption">Members</h3>
                </div>
                <div class="widget-body bordered-top  bordered-sky">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="img-grid" style="margin: 0 auto;">
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-6.jpg" alt="image">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/woman-3.jpg" alt="image">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-2.jpg" alt="image">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-9.jpg" alt="image">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/woman-9.jpg" alt="image">
                          </a>
                        </li>
                        <li class="clearfix">
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-4.jpg" alt="image">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-1.jpg" alt="image">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/woman-4.jpg" alt="image">
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <img src="<?php echo URL::to('/'); ?>/resources/assets/frontend/krugme/images/guy-6.jpg" alt="image">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end group about -->
          </div>
        </div>


@endsection