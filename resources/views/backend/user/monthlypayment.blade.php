@extends('backend.templates.app')
@section('title' , 'Monthly Payment')
@section('content')
<div class="page-body">
<div class="page-header card">
  <div class="row align-items-end">
      <div class="col-lg-8">
          <div class="page-header-title">
              <i class="icofont icofont-clip-board bg-c-yellow"></i>
              <div class="d-inline">
                  <h4> Monthly Payment</h4>
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
<div class="row">
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
                                <p class="text-muted m-0">Deposit</p>
                                <span class="text-c-green f-20 f-w-400">812</span>
                            </div>
                            <div class="col-6 text-center p-10">
                                <p class="text-muted m-0">Loan</p>
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
        
  
   
  

</div>
</div>
@endsection


