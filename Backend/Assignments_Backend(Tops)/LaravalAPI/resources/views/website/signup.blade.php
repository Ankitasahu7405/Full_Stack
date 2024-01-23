@extends('website.layout.structure-1')

@section('main_container')

<!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Sign UP</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Sign UP</p>
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->

<!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Booking End -->

<!-- Contact Start -->
    <div class="container-fluid py-2">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Sign UP</h6>
                <h1>Registration Here</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{('/signup')}}" method="post" enctype="multipart/form-data">
						@csrf
                            <div class="form-row">
                                <div class="control-group col-sm-12">
                                    <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-12">
                                    <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="control-group col-sm-12">
                                    <input type="password" class="form-control p-4" name="password" id="password" placeholder="Your Password"
                                        required="required" data-validation-required-message="Please enter your password" />
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="control-group col-sm-12">
                                    <input type="text" class="form-control p-4" name="address" id="address" placeholder="Address"
                                        required="required" data-validation-required-message="Please enter your address" />
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="control-group col-sm-12">
                                    <input type="phonenumber" class="form-control p-4" name="phonenumber" id="phonenumber" placeholder="Mobile"
                                        required="required" data-validation-required-message="Please enter your phonenumber" />
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="control-group col-sm-12">
									<label style="color:black;">Gender :  </label>
									Male  <input type="radio" name="gender" value="Male">
									
									Female  <input type="radio" name="gender" value="Female">
								</div>
								<div class="control-group col-sm-2" style="color:black;margin-top:15px;">
									Country :
								</div>
								<div class="control-group col-sm-10" style="margin-top:10px;">
									<select name="cid" class="form-control">
										<option>select country</option>
										@if(!empty($country))
											@foreach($country as $c)
											<option value="{{$c->cid}}">{{$c->cnm}}</option>
											@endforeach
										@endif						
									</select>
                                </div>
								<div class="control-group col-sm-12" style="margin-top:10px;">
									<label style="color:black;">Language :</label><br>
									 Hindi <input type="checkbox" style="position:relative;top:2px;left:30px;" name="language[]" value="Hindi"><br>
									 English <input type="checkbox" style="position:relative;top:2px;left:14px;" name="language[]" value="English"><br>
									 Gujarati <input type="checkbox" style="position:relative;top:2px;left:6px;" name="language[]" value="Gujarati"><br>
									 Odia <input type="checkbox" style="position:relative;top:2px;left:32px;" name="language[]" value="Odia"><br>
								</div>
								<div class="control-group col-sm-2" style="color:black;margin-top:22px;">
									File :
                                </div>
								<div class="control-group col-sm-10" style="margin-top:15px;">
                                    <input type="file" class="form-control p-2" name="file" style="height:47px;"
                                        required="required" data-validation-required-message="Please enter valid image" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="sendMessageButton">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Contact End -->

@endsection