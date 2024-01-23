@extends('website.layout.structure')

@section('main_container')

    <!-- Login Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
				<h1 class="mb-4" style="margin-left:507px;letter-spacing:3px;">Login</h1>
                <div class="col-lg-12">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Login Here</h1>
                        <form action="{{url('/login_auth')}}" name="sentMessage" method="post">
						@csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-9" style="margin-left:100px;">
                                    <input type="email" name="Email" class="form-control bg-white border-0" placeholder="Enter Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-9" style="margin-left:100px;">
                                    <input type="password" name="Password" class="form-control bg-white border-0" placeholder="Enter Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3" style="padding:30px;" name="submit" type="submit">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->
@endsection