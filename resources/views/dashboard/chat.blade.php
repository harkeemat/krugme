@section('content')


<div class="col-md-6">
  <div class="row">
      <div class="tile tile-alt" id="messages-main">
      <div class="ms-menu">
          <div class="ms-user clearfix">
              <img src="{{asset('uploads/'.Auth::user()->avatar.'')}}" alt="" class="img-avatar pull-left">
              <div>Signed in as <br> {{ Auth::user()->name }}</div>
          </div>
          
          <div class="p-15">
              <div class="dropdown">
                  <a class="btn btn-azure btn-block" href="" data-toggle="dropdown">Messages <i class="caret m-l-5"></i></a>

                  <!-- <ul class="dropdown-menu dm-icon w-100">
                      <li><a href=""><i class="fa fa-envelope"></i> Messages</a></li>
                      <li><a href=""><i class="fa fa-users"></i> Contacts</a></li>
                      <li><a href=""><i class="fa fa-format-list-bulleted"> </i>Todo Lists</a></li>
                  </ul> -->
              </div>
          </div>
          
          <div class="list-group lg-alt">

              <a class="list-group-item media" href="">
                  <div class="pull-left">
                      <img src="{{ asset('uploads/'.$user_chat->avatar.'')}}" alt="" class="img-avatar">
                  </div>
                  <div class="media-body">
                      <small class="list-group-item-heading">{{ $user_chat->name }}</small><br>
                      <small class="list-group-item-text c-gray">Fierent fastidii recteque ad pro</small>
                  </div>
              </a>            
          </div>

          
      </div>

      <div class="ms-body">
          <div class="action-header clearfix">
              <div class="visible-xs" id="ms-menu-trigger">
                  <i class="fa fa-bars"></i>
              </div>
              
              <div class="pull-left hidden-xs">
                  <img src="{{ asset('uploads/'.$user_chat->avatar.'')}}" alt="" class="img-avatar m-r-10">
                  <div class="lv-avatar pull-left">
                      
                  </div>
                  <span>{{ $user_chat->name }}</span>
              </div>
               
              <ul class="ah-actions actions">
                  <li>
                      <a href="">
                          <i class="fa fa-trash"></i>
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="fa fa-check"></i>
                      </a>
                  </li>
                  <li>
                      <a href="">
                          <i class="fa fa-clock-o"></i>
                      </a>
                  </li>
                  <li class="dropdown">
                      <a href="" data-toggle="dropdown" aria-expanded="true">
                          <i class="fa fa-sort"></i>
                      </a>
          
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li>
                              <a href="">Latest</a>
                          </li>
                          <li>
                              <a href="">Oldest</a>
                          </li>
                      </ul>
                  </li>                             
                  <li class="dropdown">
                      <a href="" data-toggle="dropdown" aria-expanded="true">
                          <i class="fa fa-bars"></i>
                      </a>
          
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li>
                              <a href="">Refresh</a>
                          </li>
                          <li>
                              <a href="">Message Settings</a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>

          <div class="message-feed media">
              <div class="pull-left">
                  <img src="{{ asset('uploads/'.$user_chat->avatar.'')}}" alt="" class="img-avatar">
              </div>
              <div class="media-body">
                  <div class="mf-content">
                      Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum.
                  </div>
                  <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 09:00</small>
              </div>
          </div>
          
          <div class="message-feed right">
              <div class="pull-right">
                  <img src="{{ asset('uploads/'.Auth::user()->avatar.'')}}" alt="" class="img-avatar">
              </div>
              <div class="media-body">
                  <div class="mf-content">
                      Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                  </div>
                  <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 09:30</small>
              </div>
          </div>

          @foreach ($messages as $value)

        <div class="message-feed @if (Auth::user()->id == $value->sender_id) right @else media @endif">
          <div class="pull-right">
           <img src="@if (Auth::user()->id == $value->sender_id) {{ asset('uploads/'.Auth::user()->avatar.'')}} @else {{ asset('uploads/'.$user_chat->avatar.'')}} @endif" alt="" class="img-avatar">
         </div>
              <div class="media-body">
                  <div class="mf-content">
                     {{$value->message}}
                  </div>
                  <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2015 at 09:30</small>
              </div>
          </div>

@endforeach

          
          <div class="msb-reply">
            <form id="send_message1" method="post" action="{{url('/messages/'.$user_chat->id.'')}}">
              {{ csrf_field()}}
              <input type="hidden" id="receiver_id" value="{{$user_chat->id}}">
              <textarea name="text_message" placeholder="What's on your mind..."></textarea>
              <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
              </form>
          </div>
      </div>
      </div>
    </div>
    </div>

  @endsection