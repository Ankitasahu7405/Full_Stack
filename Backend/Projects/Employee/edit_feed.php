
<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Feedback</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
							Edit Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Comment</th>
                                            <th colspan="3" align="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(!empty ($data_feedback)){
										foreach($data_feedback as $d){
										?>
										<tr>
                                            <td><?php echo $d->Feed_ID;?></td>
                                            <td><?php echo $d->Name;?></td>
                                            <td><?php echo $d->Email;?></td>
                                            <td><?php echo $d->Comment;?></td>
                                            <td>
												<a  class="btn btn-primary">Edit</a>
												<a href="delete?delFeed_ID=<?php echo $d->Feed_ID;?>"  class="btn btn-danger">Delete</a>
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