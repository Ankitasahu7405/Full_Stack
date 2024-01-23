@extends('website.layout.structure')

@section('main_container')

    <!-- Signup Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
				<h1 class="display-4" style="margin-left:360px;letter-spacing:3px;">SIGN UP</h1>
                <div class="col-lg-12">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Registration Here</h1>
                        <form action="{{url('/signup')}}" name="sentMessage" method="post" enctype="multipart/form-data">
						@csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <select name="R_id" class="form-select bg-white border-0" style="height: 55px;">
                                        <option>Select Role</option>
											@if(!empty($role))
												@foreach($role as $r)
													<option value="{{$r->R_id}}">{{$r->R_name}}</option>
												@endforeach
											@endif
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="text" name="Name" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="email" name="Email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
								<div class="col-12 col-sm-12">
                                    <input type="password" name="Password" class="form-control bg-white border-0" placeholder="Password" style="height: 55px;">
                                </div>
								<div class="col-12 col-sm-12">
                                    <input type="number" name="Mobile" class="form-control bg-white border-0" placeholder="Mobile" style="height: 55px;">
                                </div>
								<div class="col-12 col-sm-12">
                                    <input type="text" name="Address" class="form-control bg-white border-0" placeholder="Address" style="height: 55px;">
                                </div>
								<div class="col-sm-6" style="margin-left:-90px">
									<label style="color:black;">Gender :  </label>
									Male  <input type="radio" name="Gender" value="Male">
									
									Female  <input type="radio" name="Gender" value="Female">
								</div>
								<br>
								<div class="col-12 col-sm-12">
                                    <input type="file" name="file" class="form-control bg-white border-0" style="height: 55px;padding:15px 22px">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3" name="submit" type="submit">Registration</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signup End -->
@endsection