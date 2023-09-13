<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
                <a class="navbar-brand" href="index.php">FURNITURE</a>
            </div>

            <div class="header-right">

              <a href="message-task.php" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.php" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <?php
		include_once('header.php');
		?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Basic Forms</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="panel panel-danger">
								<div class="panel-heading">
									SINGUP FORM
								</div>
								<div class="panel-body">
									<form role="form">
                                        
										<div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="text">
											<p class="help-block">Enter text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" type="password">
											<p class="help-block">Enter text here.</p>
                                        </div>
										<div class="form-group">
                                            <label>Text Here</label>
                                            <input class="form-control" type="password">
											<p class="help-block">Enter text here.</p>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </form>
								</div>
							</div>
						</div>
					</div>
             <!--/.ROW-->
		</div>
	</div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php
	include_once('footer.php');
	?>
</body>
</html>
