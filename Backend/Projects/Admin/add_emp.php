<?php include_once('header.php')?>

	<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Employee</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								Add Employee
							</div>
							<div class="panel-body">
								<form method="post" enctype="multipart/from-data">
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input class="form-control" name="Emp_name" type="text">
                                            <p class="help-block">Help text here.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="Password" type="password">
                                        </div>
     
                                        <button type="submit" name="submit" class="btn btn-info">Submit </button>
										
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
<?php include_once('footer.php')?>