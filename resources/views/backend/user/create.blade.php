@extends('backend.templates.app')
@section('title' , 'Create User')
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
                            <div id="wizard2">
                                <section>
                                    <form class="wizard-form" id="verticle-wizard" action="#">
                                        <h3> Registration </h3>
                                        <fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="userName-2" class="block">User name *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="userName-22" name="userName" type="text" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="email-2" class="block">Email *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="email-22" name="email" type="email" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="password-2" class="block">Password *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="password-22" name="password" type="password" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="confirm-2" class="block">Confirm Password *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="confirm-22" name="confirm" type="password" class="form-control ">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <h3> General information </h3>
                                        <fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="name-2" class="block">First name *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="name-22" name="name" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="surname-2" class="block">Last name *</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="surname-22" name="surname" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="phone-2" class="block">Phone #</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="phone-22" name="phone" type="number" class="form-control phone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="date" class="block">Date Of Birth</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="date22" name="Date Of Birth" type="text" class="form-control date-control">
                                                </div>
                                            </div>
                                        
                                        </fieldset>
                                        {{-- <h3> Education </h3>
                                        <fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="University-2" class="block">University</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="University-22" name="University" type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="Country-2" class="block">Country</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="Country-22" name="Country" type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="Degreelevel-2" class="block">Degree level #</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="Degreelevel-22" name="Degree level" type="text" class="form-control required phone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="datejoin" class="block">Date Join</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="datejoin2" name="Date Of Birth" type="text" class="form-control required">
                                                </div>
                                            </div>
                                        </fieldset> --}}
                                        <h3> Account Details </h3>
                                        <fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="University-2" class="block">Post Code</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="University-22" name="University" type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="Country-2" class="block">Citizenship/Licence</label>
                                                </div>
                                            
                                                <div class="col-sm-6">
                                                        <input id="Country-22" name="Country" type="file" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="Degreelevel-2" class="block">Account Type</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="Degreelevel-22" name="Degree level" type="text" class="form-control required phone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="datejoin" class="block">Family Details</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea name="Family Details"class="form-control required">

                                                    </textarea>
                                            
                                                </div>
                                            </div>
                                        </fieldset>
                                        <h3> Residence </h3>
                                        <fieldset>

                                                <div class="form-group row">

                                                        <div class="col-sm-12">
                                                                <select name="country" class="form-control">
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
                                                            </div>
                                                        </div>
                                                       
                                                    <div class="form-group row">

                                                    <div class="col-sm-12">
                                                            <select class="form-control required">
                                                                <option>Select State</option>
                                                                <option>Gujarat</option>
                                                                <option>Kerala</option>
                                                                <option>Manipur</option>
                                                                <option>Tripura</option>
                                                                <option>Sikkim</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                        
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label for="Position-2" class="block">City</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="Position-22" name="Position" type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <label for="Position-2" class="block">Permanent Residence</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input id="Position-22" name="address_1" type="text" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Position-2" class="block">Current Residence</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input id="Position-22" name="address_2" type="text" class="form-control required">
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


