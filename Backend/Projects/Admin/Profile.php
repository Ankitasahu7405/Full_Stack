<?php include_once('header.php')?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Profile</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text.</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
							My Account
                        </div>
                        
						<img src="../upload/admin/<?php echo $fetch->file;?>" alt="" width="150px">
						<br><br>
						
						<div class="detail-box" style="text-align:center">
							<p><b>ID :</b> <?php echo $fetch->ID;?></p><br>
							<p><b>Name :</b> <?php echo $fetch->Name;?></p><br>
							<p><b>Email :</b> <?php echo $fetch->Email;?></p><br>
							<div class="d-flex justify-content-center">
								<a href="" class="btn btn-primary">
									Edit Profile	
								</a>
							</div>
						</div>
						
                    </div>
				</div>
			</div>
		</div>
    <!-- End  Kitchen Sink -->
 <?php include_once('footer.php')?>