<?php
	include_once('header.php');
?>


<div class="container mt-3">
  <h2>Customers Table</h2>
  <button type="button" class="btn btn-primary" href="Add_Customer" style="margin-left:1200px;padding-left:20px;padding-right:20px;">ADD</button>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
		<th>Address</th>
        <th>Mobile</th>
        <th>Image</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php
		if(!empty ($data_customer))
		{
		 foreach($data_customer as $d)
		 {
		?>
		<tr>
			<td><?php echo $d->ID;?></td>
			<td><?php echo $d->Name;?></td>
			<td><?php echo $d->Email;?></td>
			<td><?php echo $d->Address;?></td>
			<td><?php echo $d->Mobile;?></td>
			<td><img src="upload/customer/<?php echo $d->Image;?>" width="50px"></td>
			
			<td>
				<a href="Edit_Customer?editCus_Id=<?php echo $d->ID;?>" class="btn btn-info">Edit</a>
				<a href="delete?delID=<?php echo $d->ID;?>" class="btn btn-danger">Delete</a>
				<a href="#" class="btn btn-success">Status</a>
		</tr>
		<?php
		  }
		}
		?> 
    </tbody>
  </table>
</div>

<?php
	include_once('footer.php');
?>