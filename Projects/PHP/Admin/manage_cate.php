<?php
	include_once('header.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
		<h1>MANAGE CATEGORY</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index">Home</a></li>
				<li class="breadcrumb-item">Category</li>
				<li class="breadcrumb-item active">Manage Category</li>
			</ol>
		</nav>
    </div><!-- End Page Title -->

    <section class="section">
		<div class="row">
			<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
				<h5 class="card-title text-danger">MANAGE CATEGORY</h5>

				<!-- Table with hoverable rows -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Category Name</th>
							<th scope="col">Category Image</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							if(!empty($data_category))
							{
								foreach($data_category as $d)
								{
						?>
							<tr>
								<td scope="row"><?php echo $d->cate_id;?></td>
								<td><?php echo $d->cate_name;?></td>
								<td><img src="category<?php echo $d->cate_img;?>" height="100px" width="100px"></td>
								<td>
									<a href="" class="btn btn-info me-1">Edit</a>
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

</body>

</html>