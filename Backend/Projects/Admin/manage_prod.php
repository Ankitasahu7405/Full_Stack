<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Product</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product_name</th>
                                            <th>Disc_price</th>
                                            <th>Main_price</th>
											<th>File</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									if(!empty ($data_product)){
										foreach($data_product as $d){
										?>
                                        <tr>
                                            <td><?php echo $d->Prod_ID;?></td>
                                            <td><?php echo $d->Product_name;?></td>
                                            <td><?php echo $d->Disc_price;?></td>
                                            <td><?php echo $d->Main_price;?></td>
											<td><?php echo $d->file;?></td>
                                            <td><?php echo $d->Description;?></td>
                                            <td>							
												<a href="edit_prod?editProd_ID=<?php echo $d->Prod_ID;?>" class="btn btn-primary">Edit</a>
												<a href="delete?delProd_ID=<?php echo $d->Prod_ID;?>"  class="btn btn-danger">Delete</a>
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
				</div>
			</div>
		</div>
    <!-- End  Kitchen Sink -->
<?php include_once('footer.php')?>