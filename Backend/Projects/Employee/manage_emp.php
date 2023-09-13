
<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Employee</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Employee
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Emp_name</th>
                                            <th>Password</th>
                                            <th colspan="3" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(!empty ($data_employee)){
										foreach($data_employee as $d){
										?>
                                        <tr>
                                            <td><?php echo $d->Emp_ID;?></td>
                                            <td><?php echo $d->Emp_name;?></td>
                                            <td><?php echo $d->Password;?></td>
                                            <td>
												<a href="edit_emp?editEmp_ID=<?php echo $d->Emp_ID;?>" class="btn btn-primary">Edit</a>
												<a href="delete?delEmp_ID=<?php echo $d->Emp_ID;?>"  class="btn btn-danger">Delete</a>
											</td>
                                        </tr>
                                       <?php
										}
									}
									else
									{
									   ?>
											<tr>
												<td> DATA NOT FOUND </td>
											</tr>
										<?php
										}
										?>                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <?php include_once('footer.php')?>