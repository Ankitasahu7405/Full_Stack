
<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Customer</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
							Edit Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>file</th>
											<th>Email</th>
                                            <th>Password</th>
											<th>Address</th>
											<th>Mobile</th>
                                            <th colspan="3" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(!empty ($data_customer)){
										foreach($data_customer as $d){
										?>
                                        <tr>
                                            <td><?php echo $d->ID;?></td>
                                            <td><?php echo $d->Name;?></td>
                                            <td><img src="../upload/customer/<?php echo $d->file;?>" width="50" height="50"</td>
											<td><?php echo $d->Email;?></td>
                                            <td><?php echo $d->Password;?></td>
											<td><?php echo $d->Address;?></td>
											<td><?php echo $d->Mobile;?></td>
                                            <td>
												<a  class="btn btn-primary">Edit</a>
												<a href="delete?delID=<?php echo $d->ID;?>"  class="btn btn-danger">Delete</a>
											</td>
                                        </tr>
                                        <?php
										}
									}
									   ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <?php include_once('footer.php')?>