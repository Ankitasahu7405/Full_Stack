﻿<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Category</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
              
				<div class="row">
					<div class="col-md-12">
						<!--   Kitchen Sink -->
						<div class="panel panel-default">
							<div class="panel-heading">
								Category
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table id="table" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th>Cate_Id</th>
												<th>Cate_name</th>
												<th>Cate_img</th>
												<th>Action</th>
											</tr>
										</thead>
										
										<tbody>
											<?php
											if(!empty ($data_category)){
											foreach($data_category as $d){
											?>
											<tr>
												<td><?php echo $d->Cate_Id;?></td>
												<td><?php echo $d->Cate_name;?></td>
												<td><img src="category<?php echo $d->file;?>" height="50px" width="50px"></td>
												<td>
													<a href="edit_cate?editCate_Id=<?php echo $d->Cate_Id;?>" class="btn btn-primary">Edit</a>
													<a href="delete?delCate_Id=<?php echo $d->Cate_Id;?>"  class="btn btn-danger">Delete</a>
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
		</div>
   <!-- End  Kitchen Sink -->
<?php include_once('footer.php')?>