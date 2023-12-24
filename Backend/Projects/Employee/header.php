<?php
function active($currect_page)
{
  $url_array=explode('/', $_SERVER['REQUEST_URI']) ;
  $url=end($url_array);  
  if($currect_page==$url)
  {
    echo 'active'; //class name in css 
  } 
}
?>
<?php
if(!($_SESSION['index']))
{
	echo "<script>
	window.location='index';
	</script>";
}
?>
	
<!DOCTYPE php>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Employee Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Furniture Shopping</a>
				
				<a href="" style="float:left">
				<?php
					if(isset($_SESSION['user']))
					{
						echo " / Welcome... ". $_SESSION['user'];
					}
				?>
				</a>
            </div>

            <div class="header-right">

                <a href="message-task.php
                " class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.php
                " class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="employee_logout"
                 class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/Image.JPEG" class="img-thumbnail" style="border-radius:50%;"/>

                            <div class="inner-text">
                                Ankita Sahu
                            <br/>
                                <small>Last Login : 1 Weeks Ago </small>
                            </div>
                        </div>
                    </li>


                    <li>
                        <a class="active-menu"href="dashboard"><i class="fa fa-dashboard <?php active('dashboard.php')?> "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Category <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a class="nav-link <?php active('add_cate.php')?>"  href="add_cate"><i class="fa fa-table <?php active('add_cate.php')?>"></i>Add Category</a>
                            </li>
                            <li>
                                <a  href="manage_cate"><i class="fa fa-table <?php active('manage_cate.php')?> "></i>Manage Category</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-shopping-cart "></i>Product<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a  href="add_prod"><i class="fa fa-table <?php active('add_prod.php')?>"></i>Add Product</a>
                            </li>
                            <li>
                                <a  href="manage_prod"><i class="fa fa-table <?php active('manage_prod.php')?>"></i>Manage Product</a>
                            </li>
                             
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user "></i>Employee<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a <?php active('add_emp.php')?> href="add_emp"><i class="fa fa-table <?php active('add_emp.php')?>"></i>Add Employee </a>
                            </li>
                             <li>
                                <a <?php active('manage_emp.php')?> href="manage_emp"><i class="fa fa-table <?php active('add_emp.php')?>"></i>Manage Employee</a>
                            </li>
                             
                        </ul>
                    </li>
					
					<li>
                        <a <?php active('Customer.php')?> href="Customer"><i class="fa fa-user"></i>Customer</a>
                    </li>
                    
                    <li>
                        <a <?php active('Feedback.php')?> href="Feedback"><i class="fa fa-user"></i>Feedback</a>
                    </li>
					
					<li>
                        <a <?php active('Contact.php')?> href="Contact"><i class="fa fa-user"></i>Contact</a>
                    </li>
                     
                    <li>
                        <a href="#"><i class="fa fa-sign-in"></i>Login</a>
                    </li>
					
					<li>
                        <a href="#"><i class="fa fa-sign-in"></i>Logout</a>
                    </li>          
                </ul>
            </div>
		</nav>
	</div>
</body>	