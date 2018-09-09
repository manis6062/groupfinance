<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="index.html">
                <img class="img-fluid" src="backend/assets/images/logo.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                {{-- <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                </li> --}}
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
                  Menu           
             <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification row">
                        <li class="col-sm-3">
                            <h6 class="mega-menu-title">quick Action</h6>
                            <ul class="mega-menu-links">
                                <li><a href="form-elements-component.html">Monthly Payment</a></li>                                    
                                <li><a href="user-card.html">Events</a></li>
                                <li><a href="user-profile.html">User Information</a></li>
                                <li><a href="auth-lock-screen.html">Reports</a></li>
                                <li><a href="auth-lock-screen.html">Invitations</a></li>
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
                                <img class="d-flex align-self-center" src="backend/assets/images/user.png" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">Pratap Malla</h5>
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
                        <img src="backend/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                        <span>Pratap Malla</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="#!">
                                <i class="ti-settings"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="user-profile.html">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="email-inbox.html">
                                <i class="ti-email"></i> My Messages
                            </a>
                        </li>
                        <li>
                            <a href="auth-lock-screen.html">
                                <i class="ti-lock"></i> Lock Screen
                            </a>
                        </li>
                        <li>
                        <a href="auth-normal-sign-in.html">
                            <i class="ti-layout-sidebar-left"></i> Logout
                        </a>
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
                            <img src="backend/assets/images/avatar-4.jpg" alt="DraggableDualViewSlideshow" />
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