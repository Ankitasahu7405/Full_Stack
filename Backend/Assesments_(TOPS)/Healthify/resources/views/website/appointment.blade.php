@extends('website.layout.structure')

@section('main_container')

    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="team">Find Doctor</a>
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <form action="{{url('/appointment')}}" name="sentMessage" method="post">
						@csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <select class="form-select bg-white border-0" name="D_Id" style="height: 55px;">
                                        <option>Choose Department</option>
											@if(!empty($department))
												@foreach($department as $d)
													<option value="{{$d->D_Id}}">{{$d->D_Name}}</option>
												@endforeach
											@endif
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" name="Name" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" name="Email" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    
                                        <input type="date" name="Date"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                   
                                </div>
                                <div class="col-12 col-sm-6">
                                    
                                        <input type="time" name="Time"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                   
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit" value="Save" >Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection