@extends('Admin.Layout.structure')

@section('main_container')

    <div class="content-wrapper">
        <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<h4 class="header-line">ADD SERVICE</h4>
				</div>
			</div>
             
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="panel panel-info">
                        <div class="panel-heading">SERVICE</div>
						
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
									<label>Service Name</label>
                                    <input class="form-control" name="serv_nm" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Service Image</label>
                                    <input class="form-control" name="serv_image" type="file" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" name="desc" type="text"></input>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input class="form-control" name="price" type="number"></input>
                                </div>
								
								<button type="submit" name="submit" class="btn btn-info">Send Message </button>
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