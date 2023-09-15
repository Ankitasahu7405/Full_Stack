<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Task List manager</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<style>
		#abc
		{
			position:static;
			animation: preloader 4s linear infinite;
		}
		
		@keyframes preloader
		{
			from{transform: rotate(0deg);}
			to{transform: rotate(360deg);}
		}
	</style>
</head>

<body>
    <div class="navbar navbar-inverse set-radius-zero" style="margin:10px;" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" width="290px" style="margin-top:10px;margin-left:-10px">                
                </a>
            </div>

            <div class="right-div">
                <a>
					<img src="assets/img/Group.png" width="80px" style="margin-top:0px;margin-right:10px"> 
				</a>
            </div>
			
        </div>
    </div>
    <!-- LOGO HEADER END-->
	
    <div class="container">
		<div class="row ">             
			<h1 style="font-family: 'Georgia';font-size:60px;color:maroon;margin-left:40px;margin-top:10px">Task List Manager</h1>
        </div>
    </div>
	
    <!-- MENU SECTION END-->
 
    <div class="content-wrapper">
        <div class="container">
			<div class="row pad-botm">
				<div class="col-md-12">
					<!--<img src="assets/img/Banner_Strawberry.png" height="260px" style="margin-top:-40px;position:absolute;left:-60px;">
					<img src="assets/img/Plate.JFIF" height="140px" style="margin-top:90px;position:absolute;left:50px;transform: rotate(-80deg);">-->
					<img src="assets/img/Burger_9.png" id="abc" height="280px" style="margin-top:-50px;position:absolute;left:-80px;">
					<img src="assets/img/Food-Template.png" height="250px" width="440px"style="margin-left:750px;margin-top:-70px">
					<img src="assets/img/104362.jpg" height="150px" width="170px"style="position:absolute;top:220px;left:-40px;border-radius:50%;">
					<img src="assets/img/107704.jpg" height="150px" width="170px"style="position:absolute;top:220px;left:180px;border-radius:50%;">
					<img src="assets/img/Food.jpg" height="150px" width="170px"style="position:absolute;top:220px;left:405px;border-radius:50%;">
					<img src="assets/img/109270.jpg" height="150px" width="170px"style="position:absolute;top:220px;left:620px;border-radius:50%;">
					<img src="assets/img/100075.jpg" height="150px" width="170px"style="position:absolute;top:220px;left:830px;border-radius:50%;">
					<img src="assets/img/108177.jpg" height="150px" width="170px"style="position:absolute;top:220px;right:-50px;border-radius:50%;">
				</div>
			</div>
		</div>
    </div>
 
    <!-- CONTENT-WRAPPER SECTION END-->
	
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<p style="font-family: 'Trebuchet MS';font-size:25px;color:black;margin-left:240px;position:absolute;top:-780px;">(1) Add Task</p>
                <p style="font-family: 'Trebuchet MS';font-size:25px;color:black;margin-left:240px;position:absolute;top:-730px;">(2) Task List</p>
				<p style="font-family: 'Trebuchet MS';font-size:25px;color:black;margin-left:490px;position:absolute;top:-780px;">(3) Delete Tasks</p>
                <p style="font-family: 'Trebuchet MS';font-size:25px;color:black;margin-left:490px;position:absolute;top:-730px;">(4) Clear all</p>
			</div>	
        </div>
    </div>
  
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-9"></div>
                <div class="topnav">
					<div class="search-container">
						<form action="" method="post">
							<input type="text" name="find" style="padding:5px 30px;position:absolute;top:450px;margin-left:-15px;border-radius:6px;" required="">
							<button type="submit" name="submit" style="padding:5px 20px;position:absolute;top:450px;left:610px;border-radius:6px;"><b>Submit</b></button>
						</form>
							<?php
								if(isset($_REQUEST['submit']))
								{
									$var=$_REQUEST['find'];
										if($var=="1")
										{
											echo"<script>
											alert('welcome customer ');
											window.location='Add-Task.php';
											</script>" ;
										}
										if($var=="2")
										{
											echo"<script>
											alert('welcome customer');
											window.location='Task-list.php';
											</script>" ;
										}
										if($var=="3")
										{
											echo"<script>
											alert('welcome customer');
											window.location='Delete-Task.php';
											</script>" ;
										}
										if($var=="4")
										{
											echo"<script>
											alert('welcome customer');
											window.location='Clear-all.php';
											</script>" ;
										}
										if($var=="5")
										{
											echo"<script>
											alert('welcome customer');
											window.location='Login.php';
											</script>" ;
										}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
    
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
