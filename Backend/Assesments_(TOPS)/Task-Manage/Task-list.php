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
					
					<h2 style="position:absolute;left:170px;top:308px;font-family:'Dancing Script';
						font-size:30px;color:goldenrod">Breakfast</h2>
					
					<h3 style="position:absolute;left:170px;top:345px;font-family:'sans-serif';color:darkblue">There are no tasks in the selected task list.</h3>
					
					<p style="position:absolute;left:180px;top:450px;font-family:'Lucida Sans Unicode';color:goldenrod;font-size:22px"><b>Add Task</b></p>
					<form action="" method="post">
						<h4 style="position:absolute;left:230px;top:485px;font-family:'Lucida Sans Unicode';"><b>Task:</b></h4>
						<select name="food" style="position:absolute;left:296px;top:490px;padding:6px 70px">
							<option value="-1"></option>
							<option value="1">Breakfast</option>
							<option value="2">Lunch</option>
							<option value="3">Dinner</option>
						</select>
						<button type="submit" name="submit" style="position:absolute;left:300px;top:527px;border-radius:6px;padding:3px 20px"><b>Add Task</b></button>
					
					</form>
					
					<p style="position:absolute;right:350px;top:337px;font-family:'Lucida Sans Unicode';color:goldenrod;font-size:22px"><b>List Selection</b></p>
					<form action="" method="post">
						<h4 style="position:absolute;right:390px;top:367px;font-family:'Lucida Sans Unicode';"><b>List:</b></h4>
						<select name="food" style="position:absolute;right:165px;top:373px;padding:4px 70px">
							<option value="-1"></option>
							<option value="1">Breakfast</option>
							<option value="2">Lunch</option>
							<option value="3">Dinner</option>
						</select>
						<button type="submit" name="submit" style="position:absolute;right:275px;top:405px;border-radius:6px;padding:1px 15px"><b>Select List</b></button>
						
						<button type="submit" name="submit" style="position:absolute;right:410px;top:450px;border-radius:6px;padding:1px 15px"><b>Clear All</b></button>
					</form>
					<p style="position:absolute;right:350px;top:505px;font-family:'Lucida Sans Unicode';color:goldenrod;font-size:22px"><b>Add Task List</b></p>
					<form action="" method="post">
						<h4 style="position:absolute;right:390px;top:535px;font-family:'Lucida Sans Unicode';"><b>List:</b></h4>
						<select name="food" style="position:absolute;right:165px;top:540px;padding:4px 70px">
							<option value="-1"></option>
							<option value="1">Breakfast</option>
							<option value="2">Lunch</option>
							<option value="3">Dinner</option>
						</select>
						<button type="submit" name="submit" style="position:absolute;right:289px;top:577px;border-radius:6px;padding:1px 15px"><b>Add List</b></button>
						
						<button type="submit" name="submit" style="position:absolute;right:400px;top:630px;border-radius:6px;padding:1px 15px"><b>Clear All</b></button>
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
