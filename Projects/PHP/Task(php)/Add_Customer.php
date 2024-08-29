<?php
	include_once('header.php');
?>

<div class="container mt-5">
  <div class="row">
    <form action="" method="post" enctype="multipart/form-data">
		<div class="mb-3 mt-3">
			<label for="email" class="form-label">Name:</label>
			<input type="text" class="form-control" id="email" placeholder="Enter Name" name="Name">
		</div>
		<div class="mb-3">
			<label for="pwd" class="form-label">Email:</label>
			<input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email">
		</div>
		<div class="mb-3">
			<label for="pwd" class="form-label">Password:</label>
			<input type="password" class="form-control" id="Password" placeholder="Enter Password" name="Password">
		</div>
		<div class="mb-3">
			<label for="pwd" class="form-label">Address:</label>
			<input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address">
		</div>
		<div class="mb-3">
			<label for="pwd" class="form-label">Mobile:</label>
			<input type="number" class="form-control" id="Mobile" placeholder="Enter Mobile" name="Mobile">
		</div>
		<div class="mb-3">
			<label for="pwd" class="form-label">Image:</label>
			<input type="file" class="form-control" id="Image" name="Image">
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>

<?php
	include_once('footer.php');
?>