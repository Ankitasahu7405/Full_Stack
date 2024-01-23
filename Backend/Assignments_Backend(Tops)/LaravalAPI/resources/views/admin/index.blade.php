@extends('admin.layout.structure-1')

@section('main_container')

<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
			<img src="{{url('admin/img/admin.jpg')}}" height="200px" />
        </div>
    </div>
	
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
			<div class="panel-body">
                <form action="{{url('/alogin_auth')}}" method="post">
                    @csrf
						<hr />
						<h5>Enter Admin Details To Login</h5>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                        </div>
						
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password"  name="password" class="form-control"  placeholder="Your Password" />
                        </div>
						
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" /> Remember Me
							</label>
							
							<span class="pull-right">
                                <a href="index" >Forget Password ? </a> 
                            </span>
                        </div>
						
                        <div class="form-group"> 
							<input type="submit" name="submit" class="btn btn-primary">
						</div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection