<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>


  <title>@yield('title')</title>
  <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="#">
      <meta name="keywords" content="Group , Finance, Report">
      <meta name="author" content="Group Finance System">
      <!-- Favicon icon -->
      <link rel="icon" href="backend/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

{{HTML::style('backend/bower_components/bootstrap/css/bootstrap.min.css')}}
{{HTML::style('backend/assets/icon/themify-icons/themify-icons.css')}}
{{HTML::style('backend/assets/icon/icofont/css/icofont.css')}}
{{HTML::style('backend/assets/pages/flag-icon/flag-icon.min.css')}}
{{HTML::style('backend/assets/pages/menu-search/css/component.css')}}
{{HTML::style('backend/bower_components/nvd3/css/nv.d3.css')}}
  <!-- Notification.css -->
  {{HTML::style('backend/assets/pages/notification/notification.css')}}

  <!-- Select 2 css --> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" rel="stylesheet" />

<!--forms-wizard css-->
   {{HTML::style('backend/bower_components/jquery.steps/css/jquery.steps.css')}}

{{HTML::style('backend/assets/css/style.css')}}
{{HTML::style('backend/assets/css/jquery.mCustomScrollbar.css')}}
{{HTML::style('backend/css/custom.css')}}
{{HTML::style('backend/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}
 


<script src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
              crossorigin="anonymous"></script>
              <script
			  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
			  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
              crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
              





</head>
<body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
  <div class="ball-scale">
      <div class='contain'>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
          <div class="ring"><div class="frame"></div></div>
      </div>
  </div>
</div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">

          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">

                  <div class="navbar-logo">
                      {{-- <a class="mobile-menu" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a> --}}
                      <a class="mobile-search morphsearch-search" href="#">
                          <i class="ti-search"></i>
                      </a>
                      <a href="index.html">
                          <img class="img-fluid" src="{{url('backend/assets/images/logo.png')}}" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options">
                          <i class="ti-more"></i>
                      </a>
                  </div>

                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li>
                              <a class="main-search morphsearch-search" href="#">
                                  <!-- themify icon -->
                                  <i class="ti-search"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                          <li class="mega-menu-top">
                           
                              <a href="#">
Menu                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification row">
                                  <li class="col-sm-3">
                                      <h6 class="mega-menu-title">quick Action</h6>
                                      <ul class="mega-menu-links">
                                          <li><a href="form-elements-component.html">Monthly Payment</a></li>                                    
                                          <li><a href="user-card.html">Events</a></li>
                                          <li><a href="auth-lock-screen.html">Messages</a></li>
                                          <li><a href="user-profile.html">User Information</a></li>
                                          <li><a href="auth-lock-screen.html">User Activity</a></li>
                                          <li><a href="auth-lock-screen.html">Tasks</a></li>
                                          <li><a href="auth-lock-screen.html">Reports</a></li>



                                      </ul>
                                  </li>
                                  <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Finance</h6>
                                        <ul class="mega-mailbox">
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-folder"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>User Accounts</h5>
                                                        <small class="text-muted">User Accounts</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-headphone-alt"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Loans and Interest</h5>
                                                        <small class="text-muted">Loans</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-dropbox"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Penalties</h5>
                                                        <small class="text-muted">Penalties
                                                        </small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-location-pin"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Bonus</h5>
                                                        <small class="text-muted">Find Your Location with ease of use</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                  <li class="col-sm-3">
                                      <h6 class="mega-menu-title">Income and Investment</h6>
                                      <ul class="mega-mailbox">
                                          <li>
                                              <a href="#" class="media">
                                                  <div class="media-left">
                                                      <i class="ti-folder"></i>
                                                  </div>
                                                  <div class="media-body">
                                                      <h5>Share</h5>
                                                      <small class="text-muted">Store your data</small>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="media">
                                                  <div class="media-left">
                                                      <i class="ti-headphone-alt"></i>
                                                  </div>
                                                  <div class="media-body">
                                                      <h5>Events</h5>
                                                      <small class="text-muted">24-hour support</small>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="media">
                                                  <div class="media-left">
                                                      <i class="ti-dropbox"></i>
                                                  </div>
                                                  <div class="media-body">
                                                      <h5>Gold</h5>
                                                      <small class="text-muted">Store large amount of data in one-box only
                                                      </small>
                                                  </div>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#" class="media">
                                                  <div class="media-left">
                                                      <i class="ti-location-pin"></i>
                                                  </div>
                                                  <div class="media-body">
                                                      <h5>Silver</h5>
                                                      <small class="text-muted">Find Your Location with ease of use</small>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </li>
                                  
                                  <li class="col-sm-3">
                                      <h6 class="mega-menu-title">Contact User</h6>
                                      <div class="mega-menu-contact">
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                              <div class="col-9">
                                                  <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                              <div class="col-9">
                                                  <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input1">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                              <div class="col-9">
                                                  <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                              </div>
                                          </div>
                                          <div class="form-group row">                                                <label for="exampleTextarea" class="col-3 col-form-label">Message</label>                                                <div class="col-9">                                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>                                                </div>                                            </div>                                            <div class="form-group row">                                                <div class="col-12 text-right">                                                    <button class="btn btn-primary">Submit</button>                                                </div>                                            </div>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                        
                             
                      </ul>
                      <ul class="nav-right">
                            {{-- <li>
                                    <span style="color:greenyellow">{{ucwords(Auth::user()->role->first()->name)}}</span> 
                               </li> --}}
                          <li class="header-notification lng-dropdown">
                              <a href="#" id="dropdown-active-item">
                                  <i class="flag-icon flag-icon-gb m-r-5"></i> English
                              </a>
                              <ul class="show-notification">
                                  <li>
                                      <a href="#" data-lng="en">
                                          <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" data-lng="es">
                                          <i class="flag-icon flag-icon-np m-r-5"></i> Nepali
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="header-notification">
                              <a href="#!">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-pink"></span>
                              </a>
                              <ul class="show-notification">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class="label label-danger">New</label>
                                  </li>
                                  <li>
                                      <div class="media">
                                          <img class="d-flex align-self-center" src="{{url('images/profile_pic/thumb' . '/' . Auth::user()->profile->profile_pic)}}" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">{{Auth::user()->name}}</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="media">
                                          <img class="d-flex align-self-center" src="backend/assets/images/user.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Joseph William</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="media">
                                          <img class="d-flex align-self-center" src="backend/assets/images/user.png" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Sara Soudein</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </li>
                          <li class="header-notification">
                              <a href="#!" class="displayChatbox">
                                  <i class="ti-comments"></i>
                                  <span class="badge bg-c-green"></span>
                              </a>
                          </li>
                          <li class="user-profile header-notification">
                              <a href="#!">
                                  <img src="{{url('images/profile_pic/thumb' . '/' . Auth::user()->profile->profile_pic)}}" class="img-radius" alt="User-Profile-Image">
                                  <span>{{Auth::user()->name}}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li>
                                      <a href="user-profile.html">
                                          <i class="ti-user"></i> Profile
                                      </a>
                                  </li>
                                 
                                  <li>

                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <i class="ti-layout-sidebar-left"></i>
                                    Logout  
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
</form>

                              </li>
                              </ul>
                          </li>
                      </ul>
                      <!-- search -->
                      <div id="morphsearch" class="morphsearch">
                          <form class="morphsearch-form">
                              <input class="morphsearch-input" type="search" placeholder="Search..." />
                              <button class="morphsearch-submit" type="submit">Search</button>
                          </form>
                          <div class="morphsearch-content">
                              <div class="dummy-column">
                                  <h2>People</h2>
                                  <a class="dummy-media-object" href="#!">
                                      <img src="backend/assets/images/avatar-1.jpg" alt="Sara Soueidan" />
                                      <h3>Sara Soueidan</h3>
                                  </a>
                                  <a class="dummy-media-object" href="#!">
                                      <img src="backend/assets/images/avatar-2.jpg" alt="Shaun Dona" />
                                      <h3>Shaun Dona</h3>
                                  </a>
                              </div>
                              <div class="dummy-column">
                                  <h2>Popular</h2>
                                  <a class="dummy-media-object" href="#!">
                                      <img src="backend/assets/images/avatar-3.jpg" alt="PagePreloadingEffect" />
                                      <h3>Page Preloading Effect</h3>
                                  </a>
                                  <a class="dummy-media-object" href="#!">
                                      <img src="{{url('images/profile_pic/thumb' . '/' . Auth::user()->profile->profile_pic)}}" alt="DraggableDualViewSlideshow" />
                                      <h3>Draggable Dual-View Slideshow</h3>
                                  </a>
                              </div>
                              <div class="dummy-column">
                                  <h2>Recent</h2>
                                  <a class="dummy-media-object" href="#!">
                                      <img src="backend/assets/images/avatar-5.jpg" alt="TooltipStylesInspiration" />
                                      <h3>Tooltip Styles Inspiration</h3>
                                  </a>
                                  <a class="dummy-media-object" href="#!">
                                      <img src="backend/assets/images/avatar-6.jpg" alt="NotificationStyles" />
                                      <h3>Notification Styles Inspiration</h3>
                                  </a>
                              </div>
                          </div>
                          <!-- /morphsearch-content -->
                          <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                      </div>
                      <!-- search end -->
                  </div>
              </div>
          </nav>

          <!-- Sidebar chat start -->
          <div id="sidebar" class="users p-chat-user showChat">
              <div class="had-container">
                  <div class="card card_main p-fixed users-main">
                      <div class="user-box">
                          <div class="card-block">
                              <div class="right-icon-control">
                                  <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                  <div class="form-icon">
                                      <i class="icofont icofont-search"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="main-friend-list">
                              <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Josephin Doe</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Lary Doe</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Alice</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="{{url('images/profile_pic/thumb' . '/' . Auth::user()->profile->profile_pic)}}" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Alia</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-5.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Suzen</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-6.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-danger"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Michael Scofield</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-7.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Irina Shayk</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-danger"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Sara Tancredi</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Samon</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Daizy Mendize</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="{{url('images/profile_pic/thumb' . '/' . Auth::user()->profile->profile_pic)}}" alt="Generic placeholder image">
                                      <div class="live-status bg-danger"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Loren Scofield</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-5.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Shayk</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-6.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-danger"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Sara</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-7.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Doe</div>
                                  </div>
                              </div>
                              <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                                  <a class="media-left" href="#!">
                                      <img class="media-object" src="backend/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                      <div class="live-status bg-success"></div>
                                  </a>
                                  <div class="media-body">
                                      <div class="f-13 chat-header">Lary</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Sidebar inner chat start-->
          <div class="showChat_inner">
              <div class="media chat-inner-header">
                  <a class="back_chatBox">
                      <i class="icofont icofont-rounded-left"></i> Josephin Doe
                  </a>
              </div>
              <div class="media chat-messages">
                  <a class="media-left photo-table" href="#!">
                      <img class="media-object img-circle m-t-5" src="backend/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                  </a>
                  <div class="media-body chat-menu-content">
                      <div class="">
                          <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                          <p class="chat-time">8:20 a.m.</p>
                      </div>
                  </div>
              </div>
              <div class="media chat-messages">
                  <div class="media-body chat-menu-reply">
                      <div class="">
                          <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                          <p class="chat-time">8:20 a.m.</p>
                      </div>
                  </div>
                  <div class="media-right photo-table">
                      <a href="#!">
                          <img class="media-object img-circle m-t-5" src="backend/assets/images/user.png" alt="Generic placeholder image">
                      </a>
                  </div>
              </div>
              <div class="chat-reply-box p-b-20">
                  <div class="right-icon-control">
                      <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                      <div class="form-icon">
                          <i class="icofont icofont-paper-plane"></i>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Sidebar inner chat end-->
          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <div class="pcoded-content">
                      <div class="pcoded-inner-content">
                          <div class="main-body">
                              <div class="page-wrapper">

                                  @yield('content')
                              </div>

                              {{-- <div id="styleSelector">

                              </div> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

 