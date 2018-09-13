@extends('backend.templates.app')
@section('title' , 'Group Finance | User Accounts')
@section('content')
<div class="page-body">
{{-- <div class="page-header card">
  <div class="row align-items-end">
      <div class="col-lg-8">
          <div class="page-header-title">
              <i class="icofont icofont-clip-board bg-c-yellow"></i>
              <div class="d-inline">
                  <h4> User Accounts</h4>
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
          <li class="breadcrumb-item"><a href="#!">User Accounts</a>
          </li>
      </ul>
          </div>
      </div>
  </div>
</div> --}}
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
                              <th>Account</th>
                              <th>Phone</th>
                              <th>Status</th>
                              <th>Created On</th>
                              <th>More</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if(!empty($users))
                          @foreach($users as $key => $user)
                          <tr>
                              <td><a href="#!">
                                    @if(!empty($user->profile))  
                                <i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                  <div class="table-contain">
                                      <h6>{{$user->profile->first_name .' '  . $user->profile->last_name}}</h6>
                                      <p class="text-muted">{{$user->name}}</p>
                                      {{-- <p class="text-muted">{{$user->email}}</p> --}}
                                  </div>
                                  @endif
                              </td>
                              <td>
                                    @if(!empty($user->userAccounts))  
                                    @foreach($user->userAccounts as $key => $user_account)
                                  <p class="text-muted">{{ucwords($user_account->name)}}</p>
                                  @endforeach
                                  @endif
                              </td>
                              <td>
                                    @if(!empty($user->profile))  
                                  <i class="icofont icofont-bird text-c-green"></i>
                                  <p class="m-l-10 text-c-green">{{$user->profile->phone}}</p>
                                  @endif
                              </td>
                              <td>
                                    <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">{{ucwords($user->status)}}</button>
                                </td>
                              <td><span>{{$user->created_at}}</span></td>
                             
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
                          @endforeach
                          @endif
                        
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


