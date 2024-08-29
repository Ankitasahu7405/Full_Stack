﻿<?php
if(session()->has('aid')) {
 
}
else
{
	echo "<script> 
	window.location='admin_login';
	</script>";
}
?>

@extends('Admin.Layout.structure')

@section('main_container')

<div class="content-wrapper">
    <div class="container">
		<div class="row pad-botm">
			<div class="col-md-12">
			</div>
		</div>
		
		<div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info back-widget-set text-center">
                    <i class="fa fa-history fa-5x"></i>
                    <h3>500+&nbsp; <i class="fa fa-dollar"></i></h3>
                        Amount Pending For Approval
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
				<div class="alert alert-success back-widget-set text-center">
                    <i class="fa fa-bars fa-5x"></i>
                    <h3>300+ Tasks</h3>
                        Pending For New Events
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-warning back-widget-set text-center">
                    <i class="fa fa-recycle fa-5x"></i>
                    <h3>56+ Calls</h3>
                        To Be Made For New Orders
                </div>
			</div>
            <div class="col-md-3 col-sm-3 col-xs-6">
				<div class="alert alert-danger back-widget-set text-center">
                    <i class="fa fa-briefcase fa-5x"></i>
                    <h3>30+ Issues </h3>
                        That Should Be Resolved Now
                </div>
            </div>
		</div>              
        
		<div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{url('Admin/assets/img/1.jpg')}}" alt="" />   
                        </div>
                        <div class="item">
                            <img src="{{url('Admin/assets/img/2.jpg')}}" alt="" />                          
                        </div>
                        <div class="item">
                            <img src="{{url('Admin/assets/img/3.jpg')}}" alt="" />                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
                </div>
            </div> 
            
			<div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        Recent Chat History
                    </div>
                    <div class="panel-body chat-widget-main">
                        <div class="chat-widget-left">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor.
                        </div>
                        <div class="chat-widget-name-left">
                            <img class="media-object img-circle img-left-chat" src="{{url('Admin/assets/img/user2.png')}}" />
                            <h4>  Amanna Seiar</h4>
                            <h5>Time 2:00 pm at 25th july</h5>
                        </div>
                        <hr />
                        <div class="chat-widget-right">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor sit amet.
                        </div>
                        <div class="chat-widget-name-right">
                            <img class="media-object img-circle img-right-chat" src="{{url('Admin/assets/img/user2.png')}}" />
                            <h4>  Amanna Seiar</h4>
                            <h5>Time 2:00 pm at 25th july</h5>
                        </div>
                        <hr />
                        <div class="chat-widget-left">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor sit amet.
                        </div>
                        <div class="chat-widget-name-left">
                            <img class="media-object img-circle img-left-chat" src="{{url('Admin/assets/img/user2.png')}}" />
							<h4>  Amanna Seiar</h4>
							<h5>Time 2:00 pm at 25th july</h5>
                        </div>
                        <hr />
                        <div class="chat-widget-right">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Lorem ipsum dolor sit amet.
                        </div>
                        <div class="chat-widget-name-right">
							<img class="media-object img-circle img-right-chat" src="{{url('Admin/assets/img/user2.png')}}" />
							<h4>  Amanna Seiar</h4>
							<h5>Time 2:00 pm at 25th july</h5>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                        Recent Users
                    </div>
					<div class="panel-body text-center recent-users-sec">
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user.gif')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user2.png')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user.gif')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user2.png')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user.gif')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user2.png')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user.gif')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user2.png')}}" />
						<img class="img-thumbnail" src="{{url('Admin/assets/img/user.gif')}}" />
					</div>
				</div>
			</div>
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
						Responsive Table Example
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
									<tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>User No.</th>
                                    </tr>
                                </thead>
								
								<tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>100090</td>
                                    </tr>
									<tr class="info">
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
										<td>100091</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
										<td>100092</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
										<td>100093</td>
                                    </tr>
									<tr class="warning">
                                        <td>5</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
										<td>100094</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>6</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
										<td>100095</td>
                                    </tr>
									<tr class="danger">
                                        <td>7</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
										<td>100096</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div> 
        </div>
        <div class="row"> 
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
						Recent Comments
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
							<li class="media">
								<a class="pull-left" href="#">
									<img class="media-object img-circle img-comments" src="{{url('Admin/assets/img/user.gif')}}" />
								</a>
								<div class="media-body">
									<h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
									<p>
										Donec sit amet ligula enim. Duis vel condimentum massa.
										Maecenas eget congue dui
										interdum nibh et, volutpat dolor.
									</p>
									<!-- Nested media object -->
									<div class="media">
										<a class="pull-left" href="#">
											<img class="media-object img-circle img-comments" src="{{url('Admin/assets/img/user2.png')}}">
										</a>
										<div class="media-body">
											<h4 class="media-heading">Nulla gravida vitae neque </h4>
											Donec sit amet ligula enim. Duis vel condimentum massa.
											Maecenas eget congue dui. Vestibulum et eros consectetur,
											interdum nibh et, volutpat dolor.
											<!-- Nested media object -->
											<div class="media">
												<a class="pull-left" href="#">
													<img class="media-object img-circle img-comments" src="{{url('Admin/assets/img/user.gif')}}" />
												</a>
												<div class="media-body">
													<h4 class="media-heading">Donec sit amet ligula enim</h4>
													Donec sit amet ligula enim. Duis vel condimentum massa.
													Maecenas eget congue dui. Vestibulum et eros consectetur,
													interdum nibh et, volutpat dolor.
												</div>
											</div>
										</div>
									</div>      
								</div>
							</li>      
						</ul>
                    </div>
                </div>                    
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" >
                <div class="alert alert-info text-center">
                    <h3> IMPORTANT NOTICE</h3> 
                    <hr />
                    <i class="fa fa-warning fa-4x"></i>
                    <p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                        Lorem ipsum dolor sit amet.
                    </p>
                    <hr />
                    <a href="#" class="btn btn-info">Read Full Detalis</a> 
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