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
</head>

<body>
    <div class="navbar navbar-inverse set-radius-zero" style="margin:10px" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" width="290px" style="margin-top:6px;margin-left:-10px">                
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
	
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12 offset-md-9"></div>
            <div class="topnav">
				
				<div class="search-container" style="border: 5px solid navy;padding:240px;border-style:groove;">
					<h1 style="position:absolute;left:150px;top:240px;font-family:'Dancing Script';
						font-size:30px;">Task List Manager</h1>
					<hr width="1060px" style="border:2px solid black;position:absolute;left:150px;top:290px;">
					
					<h3 style="position:absolute;left:170px;top:330px;font-family:'sans-serif';color:darkblue">Add a new list to be managed</h3>
					
					<p style="position:absolute;right:330px;top:350px;font-family:'Lucida Sans Unicode';color:goldenrod;font-size:25px"><b>List Selection</b></p>
					<p style="position:absolute;right:270px;top:390px;font-family:'Lucida Sans Unicode';color:darkblue;font-size:20px">There are no task lists.</p>
					<p style="position:absolute;right:330px;top:440px;font-family:'Lucida Sans Unicode';color:goldenrod;font-size:25px"><b>Add Task List</b></p>
					<form action="" method="post">
						<h4 style="position:absolute;right:390px;top:475px;font-family:'Lucida Sans Unicode';"><b>List:</b></h4>
						<select name="food" style="position:absolute;right:165px;top:480px;padding:6px 70px">
							<option value="-1"></option>
							<option value="1">Breakfast</option>
							<option value="2">Lunch</option>
							<option value="3">Dinner</option>
						</select>
						<button type="submit" name="submit" style="position:absolute;right:300px;top:520px;border-radius:6px;"><b>Add List</b></button>
						
						<button type="submit" name="submit" style="position:absolute;right:400px;top:590px;border-radius:6px;"><b>Clear All</b></button>
					</form>
					<?php
						if(isset($_REQUEST['Add List']))
						{
							$var=$_REQUEST['find'];
								if($var=="value")
								{
									echo"value";
								}
						}
					?>
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
