@extends('backend.templates.app')
@section('title' , 'Show Users')
@section('content')
<div class="page-body">
<div class="page-header card">
  <div class="row align-items-end">
      <div class="col-lg-8">
          <div class="page-header-title">
              <i class="icofont icofont-clip-board bg-c-yellow"></i>
              <div class="d-inline">
                  <h4> Show Users</h4>
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
          <li class="breadcrumb-item"><a href="#!">Users</a>
          </li>
          <li class="breadcrumb-item"><a href="#!">Show Users</a>
          </li>
      </ul>
          </div>
      </div>
  </div>
</div>
    <!-- Marketing Start -->
    <div class="row">

    <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                      <li><i class="icofont icofont-simple-left "></i></li>
                      <li><i class="icofont icofont-maximize full-card"></i></li>
                      <li><i class="icofont icofont-minus minimize-card"></i></li>
                      <li><i class="icofont icofont-refresh reload-card"></i></li>
                      <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
              </div>
          </div>
          <div class="card-block marketing-card p-t-0">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Job Title</th>
                              <th>Status</th>
                              <th>Created On</th>
                              <th>More</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                  <div class="table-contain">
                                      <h6>FaceBook ads</h6>
                                      <p class="text-muted">6:00am- 8:00am</p>
                                  </div>
                              </td>
                              <td>
                                  <p class="text-muted">Softtech</p>
                              </td>
                              <td>
                                  <p class="text-muted">Softtech</p>
                              </td>
                              <td>
                                  <i class="icofont icofont-bird text-c-green"></i>
                                  <p class="m-l-10 text-c-green">6.45%</p>
                              </td>
                              <td><span>$5132</span></td>
                              <td>
                                  <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                              </td>
                              <td>
                                  <div class="dropdown-primary dropdown open">
                                      <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                      </button>
                                      <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                          <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                          <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                          <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                            <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                <div class="table-contain">
                                    <h6>FaceBook ads</h6>
                                    <p class="text-muted">6:00am- 8:00am</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <i class="icofont icofont-bird text-c-green"></i>
                                <p class="m-l-10 text-c-green">6.45%</p>
                            </td>
                            <td><span>$5132</span></td>
                            <td>
                                <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                            </td>
                            <td>
                                <div class="dropdown-primary dropdown open">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                    </button>
                                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                <div class="table-contain">
                                    <h6>FaceBook ads</h6>
                                    <p class="text-muted">6:00am- 8:00am</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <i class="icofont icofont-bird text-c-green"></i>
                                <p class="m-l-10 text-c-green">6.45%</p>
                            </td>
                            <td><span>$5132</span></td>
                            <td>
                                <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                            </td>
                            <td>
                                <div class="dropdown-primary dropdown open">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                    </button>
                                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                <div class="table-contain">
                                    <h6>FaceBook ads</h6>
                                    <p class="text-muted">6:00am- 8:00am</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <i class="icofont icofont-bird text-c-green"></i>
                                <p class="m-l-10 text-c-green">6.45%</p>
                            </td>
                            <td><span>$5132</span></td>
                            <td>
                                <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                            </td>
                            <td>
                                <div class="dropdown-primary dropdown open">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                    </button>
                                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                <div class="table-contain">
                                    <h6>FaceBook ads</h6>
                                    <p class="text-muted">6:00am- 8:00am</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <i class="icofont icofont-bird text-c-green"></i>
                                <p class="m-l-10 text-c-green">6.45%</p>
                            </td>
                            <td><span>$5132</span></td>
                            <td>
                                <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                            </td>
                            <td>
                                <div class="dropdown-primary dropdown open">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                    </button>
                                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                <div class="table-contain">
                                    <h6>FaceBook ads</h6>
                                    <p class="text-muted">6:00am- 8:00am</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <i class="icofont icofont-bird text-c-green"></i>
                                <p class="m-l-10 text-c-green">6.45%</p>
                            </td>
                            <td><span>$5132</span></td>
                            <td>
                                <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                            </td>
                            <td>
                                <div class="dropdown-primary dropdown open">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                    </button>
                                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                <div class="table-contain">
                                    <h6>FaceBook ads</h6>
                                    <p class="text-muted">6:00am- 8:00am</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <p class="text-muted">Softtech</p>
                            </td>
                            <td>
                                <i class="icofont icofont-bird text-c-green"></i>
                                <p class="m-l-10 text-c-green">6.45%</p>
                            </td>
                            <td><span>$5132</span></td>
                            <td>
                                <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                            </td>
                            <td>
                                <div class="dropdown-primary dropdown open">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                    </button>
                                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                        <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                      </tbody>
                  </table>
              </div>

          </div>
      </div>
      </div>
  </div>
  <!-- Marketing End -->
</div>
@endsection


