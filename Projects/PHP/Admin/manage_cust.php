<?php
	include_once('header.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
		<h1>CUSTOMER</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index">Home</a></li>
				<li class="breadcrumb-item active">Manage Customer</li>
			</ol>
		</nav>
    </div><!-- End Page Title -->

    <section class="section">
		<div class="row">
			<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
				<h5 class="card-title text-danger">MANAGE CUSTOMER</h5>

				<!-- Table with hoverable rows -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Address	</th>
							<th scope="col">Mobile</th>
							<th scope="col">Country</th>
							<th scope="col">Image</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							if(!empty($data_customer))
							{
								foreach($data_customer as $d)
								{
						?>
							<tr>
								<td scope="row"><?php echo $d->id;?></td>
								<td><?php echo $d->name;?></td>
								<td><?php echo $d->email;?></td>
								<td><?php echo $d->address;?></td>
								<td><?php echo $d->mobile;?></td>
								<td><?php echo $d->cid;?></td>
								<td><img src="../Website/Upload/customer/<?php echo $d->file;?>" width="100px"></td>
								<td>
									<a href="" class="btn btn-info me-1">Edit</a>
									<a href="" class="btn btn-success me-1">Status</a>
									<a href="" class="btn btn-danger me-1">Delete</a>		
								</td>
							</tr> 
							<?php
									}
								}
								else
									{
							?>				
									<tr>
										<td> DATA NO FOUND </td>
									</tr>	
							<?php
									}
							?>
					</tbody>
              </table>
              <!-- End Table with hoverable rows -->

			</div>
          </div>
          </div>
       </div>      
    </section>

</main><!-- End #main -->

<?php
	include_once('footer.php');
?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
