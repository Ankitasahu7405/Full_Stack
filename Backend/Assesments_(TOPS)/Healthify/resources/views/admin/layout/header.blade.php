<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Admin Template-Admin Pannel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{url('admin/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{url('admin/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
   
   <!-- 3 file call -->

	<script src="jquery-2.1.3.min.js" type="text/javascript"></script>

	<script src="jquery.bvalidator.js" type="text/javascript"></script>
	<link href="bvalidator.css" type="text/css" rel="stylesheet" />

	<!-- add script & call FORM id -->

	<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#table').bValidator();
    });
	</script> 
	
	<script> 


	// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

	// allways take <form id=""  in jquery with #name
	</script>

</head>
<body>
@include('sweetalert::alert')
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Admin Panel</a> 
            </div>
			<div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> 
				Last Access : 25 SEPT 2023 &nbsp; 
				<a href="#" class="btn btn-danger square-btn-adjust">Logout</a> 
			</div>		
		</nav>  
		
        <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="main-menu">
						<li class="text-center">
							<img src="{{url('admin/img/find_user.png')}}" class="user-image img-responsive">
						</li>
		
						<li>
							<a class="active-menu"  href="dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard </a>
						</li>
					
						<li>
							<a  href="tab-panel"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels </a>
						</li>
						
						<li>
							<a  href="team"><i class="fa fa-user fa-3x"></i> View All Doctors </a>
						</li>
						
						<li>
							<a  href="view-pateints"><i class="fa fa-user fa-3x"></i> View All Patients </a>
						</li>
						
						<li>
							<a  href="manage_appointment"><i class="fa fa-edit fa-3x"></i> Manage Appointments </a>
						</li>
						
					</ul>
				</div>
			</nav>
		<!-- /. NAV TOP  -->	
	</div>
</body>
</html>