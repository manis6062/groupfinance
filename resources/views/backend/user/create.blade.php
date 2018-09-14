@extends('backend.templates.app')
@section('title' , 'Group Finance | Create User')
@section('content')
<div class="page-body">

<div class="col-sm-12">

        <div class="card">
                <div class="card-header">
                    <h5>Create User</h5>
                    <span>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</span>
                    <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                </div>
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
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="wizard">
                                <section>
                                <form method="POST"  id = "user-create-form"  class = "wizard-form">
                                    {{-- Ajax Form Action Slug --}}
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="form_action" value="create_user">
                                    <input type="hidden" name="ajax_url" id="path" value="{{url('/users/ajax')}}">
                                        <h3> Login Information </h3>
                                        <fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="userName" class="block">User name *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="userName" name="name" type="text" class=" form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="email-22" class="block">Email *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="email-22" name="email" type="email" class=" form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="password-22" class="block">Password *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="password-22" name="password" type="password" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="confirm_password" class="block">Confirm Password *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="confirm_password" name="confirm_password" type="password" class="form-control" >
                                                </div>
                                            </div>
                                        </fieldset>
                                        <h3> General information </h3>
                                        <fieldset>
                                             
                                            <div class="form-group row">
                                      <div class="col-sm-6">

                                                <div class="col-sm-12">
                                                    <label for="first_name" class="block">First name *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="first_name" name="first_name" type="text" class="form-control" >
                                                </div>
                                      </div>
                                      <div class="col-sm-6">

                                            <div class="col-sm-12">
                                                <label for="first_name" class="block">Last name *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <input id="last_name" name="last_name" type="text" class="form-control" >
                                            </div>
                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                    <div class="col-sm-6">
                                                <div class="col-sm-12">
                                                    <label for="phone" class="block">Phone No. *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="phone" name="phone" type="number" class="form-control phone" >
                                                </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                            <div class="col-sm-12">
                                                                    <label for="mobile" class="block">Mobile No. *</label>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input id="mobile" name="mobile" type="number" class="form-control phone" >
                                                                </div>
                                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                    <div class="col-sm-6">
                                                <div class="col-sm-12">
                                                    <label for="dob" class="block">Date Of Birth</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="dob" name="dob" type="text" class="form-control date-control datepicker">
                                                </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                            <div class="col-sm-12">
                                                                    <label for="gender" class="block">Gender</label>
                                                                </div>
                                                            <div class="col-sm-12">
                                                                    <select class="form-control" name="gender">
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                        <option value="others">Others</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label for="family_details" class="block">Education</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <textarea name="education" class="form-control ">
    
                                                        </textarea>
                                                
                                                    </div>
                                                </div>
                                            <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label for="family_details" class="block">Bio</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                             <textarea name="bio" class="form-control">
    
                                                        </textarea>
                                                
                                                    </div>
                                                </div>
                                        
                                        </fieldset>
                                        
                                        <h3> Account Details </h3>
                                        <fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="post_code" class="block">Post Code *</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="post_code" name="post_code" type="text" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="citi_lice" class="block">Citizenship/Licence *</label>
                                                </div>
                                            
                                                <div class="col-sm-6">
                                                        <input id="citi_lice" name="citizenship_licence" type="file" class="form-control" >
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="account_type" class="block">Account Type *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                        <select class="form-control " name="account_id">
                                                            <option value="1">Lotus</option>
                                                            <option value="2">Jasmine</option>
                                                            <option value="3">Manipur</option>
                                                          
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="family_details" class="block">Family Details</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea name="family_details" class="form-control ">

                                                    </textarea>
                                            
                                                </div>
                                            </div>
                                        </fieldset>
                                        <h3> Residence </h3>
                                        <fieldset>

                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label for="country" class="block">Country *</label>
                                                    </div>
                                                        <div class="col-sm-12">
                                                                <select name="country" class="form-control" >
                                                                        <option value="Australia">Nepal</option>
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
                                                            </div>
                                                        </div>
                                                                                               
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="city" class="block">City</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="city" name="city" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label for="address_1" class="block">Permanent Residence</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input id="address_1" name="address_1" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="address_2" class="block">Current Residence *</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="address_2" name="address_2" type="text" class="form-control ">
                                                        </div>
                                                    </div>
                                        </fieldset>
                                </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>   
</div>


@endsection


