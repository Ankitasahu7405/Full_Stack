<?php
if(isset($_SESSION['admin']))
{
	echo "<script>
    window.location='Admin_login';
	</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>My Admin Bootstrap Template</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
	  <li class="nav-item">
        <a class="nav-link" href="Index">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Add_Customer">Add Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Edit_Customer">Edit Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
	  <a href="admin_logout" style="margin-left:850px;" class="btn btn-danger" title="Logout">
		  <i>Logout</i>
	  </a>
    </ul>
  </div>
</nav>

</body>
</html>