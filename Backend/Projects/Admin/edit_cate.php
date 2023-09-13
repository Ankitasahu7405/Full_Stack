<?php include_once('header.php')?>

	<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Category</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								Edit Category
							</div>
							<div class="panel-body">
								<form action="" method="post"  enctype="multipart/form-data">
									<div class="form-group">
										<label>Cate_name</label>
										<input class="form-control" type="text" name="Cate_name" value="<?php echo $fetch->Cate_name?>">
										<p class="help-block">Help text here.</p>
									</div>
									<div class="form-group">
										<label>Cate_img</label>
										<input class="form-control" type="file" name="file">
										
										<img src="<?php echo $fetch->file?>" alt="" width="40px">
									</div>
									
									<button type="submit" name="submit" class="btn btn-info">Save</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>		
<?php include_once('footer.php')?>