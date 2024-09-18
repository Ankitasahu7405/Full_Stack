<?php
if(session('aid'))
{
	return redirect('/Admin_login');
}
?>

@extends('Admin.Layout.structure2')

@section('main_container')

    <div class="content-wrapper">
        <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h1 class="header-line text-center">Admin Login</h1>
                </div>
			</div>
			
            <div class="row">
				<div class="col-md-10 col-sm-6 col-xs-12" style="margin-left:100px;">
					<div class="panel panel-info">
                        <div class="panel-heading">
                           <h4>Login Here!</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{('/admin_auth')}}" method="post">
							@csrf
                                <div class="form-group">
									<label>Enter Email</label>
                                    <input class="form-control" name="username" placeholder="Enter Email" type="email" />
									@error('username')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
								
                                <div class="form-group">
                                    <label>Enter Password</label>
                                    <input class="form-control" name="password" placeholder="Enter Password" type="password" />
									@error('password')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
								
								<button type="submit" name="submit" style="margin-left:420px;" class="btn btn-info">Login</button>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
    </div>

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{url('Admin/assets/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{url('Admin/assets/js/bootstrap.js')}}"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="{{url('Admin/assets/js/custom.js')}}"></script>
	
@endsection