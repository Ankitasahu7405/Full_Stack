@extends('Admin.Layout.structure')

@section('main_container')

    <div class="content-wrapper">
        <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h4 class="header-line">Blank Page</h4>
                </div>
			</div>
			
            <div class="row">
				<div class="col-md-12">
					<div class="alert alert-info">
						This is blank page for your customization. So use this page and start your project now.
						<br />
						Happy downloading 
						<br />
						Keep Looking <a target="_blank" href="http://www.binarytheme.com/" >binarytheme.com</a> for cool stuff.
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