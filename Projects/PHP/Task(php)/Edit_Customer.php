<?php
	include_once('header.php');
?>

<div class="container mt-5">
  <div class="row">
    <form action="" method="post" enctype="multipart/form-data">
		<div class="mb-3 mt-3">
			<label for="Name" class="form-label">Name:</label>
			<input type="text" class="form-control" value="<?php echo $fetch->Name?>" id="Name" placeholder="Enter Name" name="Name">
		</div>
		<div class="mb-3">
			<label for="Email" class="form-label">Email:</label>
			<input type="email" class="form-control" value="<?php echo $fetch->Email?>" id="Email" placeholder="Enter Email" name="Email">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password:</label>
			<input type="password" class="form-control" value="<?php echo $fetch->Password?>" id="Password" placeholder="Enter Password" name="Password">
		</div>
		<div class="mb-3">
			<label for="Address" class="form-label">Address:</label>
			<input type="text" class="form-control" value="<?php echo $fetch->Address?>" id="Address" placeholder="Enter Address" name="Address">
		</div>
		<div class="mb-3">
			<label for="Mobile" class="form-label">Mobile:</label>
			<input type="number" class="form-control" value="<?php echo $fetch->Mobile?>" id="Mobile" placeholder="Enter Mobile" name="Mobile">
		</div>
		<div class="mb-3">
			<label for="Image" class="form-label">Image:</label>
			<input type="file" class="form-control" value="<?php echo $fetch->Image?>" id="Image" name="Image">
		</div>
		<div class="form-check mb-3">
			<label class="form-check-label">
			<input class="form-check-input" type="checkbox" name="remember"> Remember me
			</label>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>

<?php
	include_once('footer.php');
?>