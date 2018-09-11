@extends('backend.templates.app')
@section('title' , 'Dashboard')
@section('content')
<div class="page-body">
        <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="icofont icofont-clip-board bg-c-yellow"></i>
                            <div class="d-inline">
                                <h4>Job Application</h4>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Ready To Use</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Job Application Fomr</a>
                        </li>
                    </ul>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="col-sm-12">
                    <!-- Job application card start -->
                    <div class="card">
                        {{-- <div class="card-header">
                            <h5>Job Application</h5>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            <div class="card-header-right">                                                             <i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
                        </div> --}}
                        <div class="card-block">
                            <div class="j-wrapper j-wrapper-820">
                                <form action="j-pro/php/action.php" method="post" class="j-pro" id="j-pro" enctype="multipart/form-data" novalidate>
                                    <!-- end /.header-->
                                    <div class="j-content">
                                        <!-- start name -->
                                        <div class="j-row">
                                            <div class="j-span6 j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-right" for="first_name">
                                <i class="icofont icofont-ui-user"></i>
                            </label>
                                                    <input type="text" id="first_name" name="first_name" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="j-span6 j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-right" for="last_name">
                                <i class="icofont icofont-ui-user"></i>
                            </label>
                                                    <input type="text" id="last_name" name="last_name" placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end name -->
                                        <!-- start email phone -->
                                        <div class="j-row">
                                            <div class="j-span6 j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-right" for="email">
                                <i class="icofont icofont-envelope"></i>
                            </label>
                                                    <input type="email" placeholder="Email" id="email" name="email">
                                                </div>
                                            </div>
                                            <div class="j-span6 j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-right" for="phone">
                                <i class="icofont icofont-phone"></i>
                            </label>
                                                    <input type="text" placeholder="Phone" id="phone" name="phone">
                                                    <span class="j-tooltip j-tooltip-right-top">Your contact phone number</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end email phone -->
                                        <div class="divider gap-bottom-25"></div>
                                        <!-- start country -->
                                        <div class="j-unit">
                                            <label class="j-input j-select">
                        <select name="country">
                            <option value="" selected>Select country</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="Germany">Germany</option>
                            <option value="India">India</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value=">Netherlands">Netherlands</option>
                            <option value=">New Zealand">New Zealand</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Portugal">Portugal</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Turkey">Turkey</option>
                            <option value="j-United Arab Emirates">j-United Arab Emirates</option>
                            <option value="j-United Kingdom">j-United Kingdom</option>
                            <option value="USA">USA</option>
                        </select>
                        <i></i>
                    </label>
                                        </div>
                                        <!-- end country -->
                                        <!-- start city post code -->
                                        <div class="j-row">
                                            <div class="j-span8 j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-right" for="city">
                                <i class="icofont icofont-building"></i>
                            </label>
                                                    <input type="text" id="city" placeholder="City" name="city">
                                                </div>
                                            </div>
                                            <div class="j-span4 j-unit">
                                                <div class="j-input">
                                                    <label class="j-icon-right" for="post">
                                <i class="icofont icofont-file-code"></i>
                            </label>
                                                    <input type="text" id="post" placeholder="Post code" name="post_code">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end city post code -->
                                        <!-- start address -->
                                        <div class="j-unit">
                                            <div class="j-input">
                                                <label class="j-icon-right" for="address">
                            <i class="icofont icofont-building"></i>
                        </label>
                                                <input type="text" id="address" placeholder="Address" name="address">
                                            </div>
                                        </div>
                                        <!-- end address -->
                                        <div class="divider gap-bottom-25"></div>
                                        <!-- start position -->
                                        <div class="j-unit">
                                            <label class="j-input j-select">
                        <select name="position">
                            <option value="" selected>Choose desired position</option>
                            <option value="tech lead">Tech Lead</option>
                            <option value="product manager">Product Manager</option>
                            <option value="senior developer">Senior Developer</option>
                            <option value="middle developer">Middle Developer</option>
                            <option value="junior developer">Junior Developer</option>
                            <option value="QA specialist">QA Specialist</option>
                            <option value="system administrator">System Administrator</option>
                        </select>
                        <i></i>
                    </label>
                                        </div>
                                        <!-- end position -->
                                        <!-- start message -->
                                        <div class="j-unit">
                                            <div class="j-input">
                                                <textarea placeholder="Additional info" spellcheck="false" name="message"></textarea>
                                                <span class="j-tooltip j-tooltip-right-top">Any useful information about you</span>
                                            </div>
                                        </div>
                                        <!-- end message -->
                                        <!-- start files -->
                                        <div class="j-row">
                                            <div class="j-span6 j-unit">
                                                <div class="j-input j-append-small-btn">
                                                    <div class="j-file-button">
                                                        Browse
                                                        <input type="file" name="file1" onchange="document.getElementById('file1_input').value = this.value;">
                                                    </div>
                                                    <input type="text" id="file1_input" readonly="" placeholder="add your CV">
                                                    <span class="j-hint">Only: doc / docx / xls /xlsx, less 1Mb</span>
                                                </div>
                                            </div>
                                            <div class="j-span6 j-unit">
                                                <div class="j-input j-append-small-btn">
                                                    <div class="j-file-button">
                                                        Browse
                                                        <input type="file" id="file2" name="file2" onchange="document.getElementById('file2_input').value = this.value;">
                                                    </div>
                                                    <input type="text" id="file2_input" readonly="" placeholder="add your CV">
                                                    <span class="j-hint">Only: doc / docx / xls /xlsx, less 1Mb</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end files -->
                                        <!-- start response from server -->
                                        <div class="j-response"></div>
                                        <!-- end response from server -->
                                    </div>
                                    <!-- end /.content -->
                                    <div class="j-footer">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                        <button type="reset" class="btn btn-default m-r-20">Reset</button>
                                    </div>
                                    <!-- end /.footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Job application card end -->
                </div>
            </div>
    <div class="row">
          <div class="col-md-4">
                  <div class="card client-map">
                      <div class="card-block">
                          <div class="client-detail">
                              <div class="client-profile">
                                  <img src="backend/assets/images/avatar-1.jpg" alt="">
                              </div>
                              <div class="client-contain">
                                  <h5>Gregory Johnes</h5>
                                  <a href="#!" class="text-muted">gregory@demo.com</a>
                                  <p class="text-muted m-0 p-t-10">Product Manager</p>
                              </div>
                          </div>
                          <div class="">
                              <div class="client-card-box">
                                  <div class="row">
                                      <div class="col-6 text-center client-border p-10">
                                          <p class="text-muted m-0">Invites</p>
                                          <span class="text-c-blue f-20 f-w-400">345</span>
                                      </div>
                                      <div class="col-6 text-center p-10">
                                          <p class="text-muted m-0">Pending</p>
                                          <span class="text-c-blue f-20 f-w-400">12</span>
                                      </div>
                                  </div>
                                  <div class="col-sm-12 client-border-card p-t-10">
                                      <p>Overall Activity</p>
                                  </div>
                                  <canvas id="client-map-1" class="client-map-chart" height="70"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card client-map">
                      <div class="card-block">
                          <div class="client-detail">
                              <div class="client-profile">
                                  <img src="backend/assets/images/avatar-5.jpg" alt="">
                              </div>
                              <div class="client-contain">
                                  <h5>Gregory Johnes</h5>
                                  <a href="#!" class="text-muted">gregory@demo.com</a>
                                  <p class="text-muted m-0 p-t-10">Product Manager</p>
                              </div>
                          </div>
                          <div class="">
                              <div class="client-card-box">
                                  <div class="row">
                                      <div class="col-6 text-center client-border p-10">
                                          <p class="text-muted m-0">Invites</p>
                                          <span class="text-c-green f-20 f-w-400">812</span>
                                      </div>
                                      <div class="col-6 text-center p-10">
                                          <p class="text-muted m-0">Pending</p>
                                          <span class="text-c-green f-20 f-w-400">00</span>
                                      </div>
                                  </div>
                                  <div class="col-sm-12 client-border-card p-t-10">
                                      <p>Overall Activity</p>
                                  </div>
                                  <canvas id="client-map-3" class="client-map-chart" height="70"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                      <div class="card client-map">
                          <div class="card-block">
                              <div class="client-detail">
                                  <div class="client-profile">
                                      <img src="backend/assets/images/avatar-5.jpg" alt="">
                                  </div>
                                  <div class="client-contain">
                                      <h5>Gregory Johnes</h5>
                                      <a href="#!" class="text-muted">gregory@demo.com</a>
                                      <p class="text-muted m-0 p-t-10">Product Manager</p>
                                  </div>
                              </div>
                              <div class="">
                                  <div class="client-card-box">
                                      <div class="row">
                                          <div class="col-6 text-center client-border p-10">
                                              <p class="text-muted m-0">Invites</p>
                                              <span class="text-c-green f-20 f-w-400">812</span>
                                          </div>
                                          <div class="col-6 text-center p-10">
                                              <p class="text-muted m-0">Pending</p>
                                              <span class="text-c-green f-20 f-w-400">00</span>
                                          </div>
                                      </div>
                                      <div class="col-sm-12 client-border-card p-t-10">
                                          <p>Overall Activity</p>
                                      </div>
                                      <canvas id="client-map-3" class="client-map-chart" height="70"></canvas>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              
        
          <div class="col-md-6 col-xl-4">
                  <div class="card amount-card o-hidden">
                      <div class="card-block">
                          <h2 class="f-w-400">$23,567</h2>
                          <p class="text-muted f-w-600 f-16"><span
                                  class="text-c-blue">Amount</span> processed</p>
                      </div>
                      <canvas id="amount-processed" height="100"></canvas>
                  </div>
              </div>
              <div class="col-md-6 col-xl-4">
                  <div class="card amount-card o-hidden">
                      <div class="card-block">
                          <h2 class="f-w-400">$14,552</h2>
                          <p class="text-muted f-w-600 f-16"><span class="text-c-pink">Amount</span> spent</p>
                      </div>
                      <canvas id="amount-spent" height="100"></canvas>
                  </div>
              </div>
              <div class="col-md-12 col-xl-4">
                  <div class="card amount-card o-hidden">
                      <div class="card-block">
                          <h2 class="f-w-400">$31,156</h2>
                          <p class="text-muted f-w-600 f-16"><span class="text-c-yellow">Profit</span>
                              processed</p>
                      </div>
                      <canvas id="profit-processed" height="100"></canvas>
                  </div>
              </div>

    </div>
</div>


@endsection
