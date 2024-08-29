<?php
	include_once('header.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
		<h1>ADD CATEGORY</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index">Home</a></li>
				<li class="breadcrumb-item">Category</li>
				<li class="breadcrumb-item active">Add Category</li>
			</ol>
		</nav>
    </div><!-- End Page Title -->
	
    <section class="section">
		<div class="row" style="margin-left:60px;">
			<div class="col-lg-11">
				<div class="card">
					<div class="card-body">
					<h5 class="card-title text-danger">ADD CATEGORY</h5>

					<!-- Vertical Form -->
					<form class="row g-3" method="post" enctype="multipart/form-data">					
						<div class="col-12">
							<label for="inputNanme4" class="form-label">Category Name</label>
							<input type="text" name="cate_name" class="form-control" id="inputNanme4">
						</div>
						
						<div class="col-12">
							<label for="inputfile4" class="form-label">Category Image</label>
							<input type="file" name="cate_img" class="form-control" id="inputfile4">
						</div>
						
						<div class="text-center">
							<button type="submit" name="submit" class="btn btn-info">Submit</button>
							<button type="reset" class="btn btn-danger">Cancel</button>
						</div>
					</form>
					<!-- Vertical Form -->

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