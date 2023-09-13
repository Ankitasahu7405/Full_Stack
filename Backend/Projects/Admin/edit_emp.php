
<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Employee</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
							Edit Employee
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
     
                                <button type="submit" name="submit" class="btn btn-info">Save</button>			
							</form>
						</div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <?php include_once('footer.php')?>