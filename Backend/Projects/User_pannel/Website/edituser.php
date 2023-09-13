<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Livefloor an Interior & Furniture Category Bootstrap Responsive Template | Contact :: W3layouts</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
</head>

<body>
  <!--header-->
  <?php
if(isset($_SESSION['user']))
{
	echo "<script>
	window.location='index';
	</script>";
}
  include_once('header.php');
  ?>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Edit User</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Edit User </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!-- /contact-->
  <div class="contact-form py-5" id="signup">
    <div class="container py-lg-5 py-md-6">
      
      <h3 class="hny-title mb-lg-5 mb-6">Edit Here</h3>
        <div class="contacts12-main mb-6">
            <form id="form1" action="" method="post" enctype="multipart/form-data">
				<div class="mb-3 mt-3">
					<label for="name" class="form-label"><b>Name</b></label>
					<input type="text" class="form-control" value="<?php echo $fetch->Name?>" id="name" placeholder="Enter Name" name="Name">
				</div>
				<div class="mb-3 mt-3">
					<label for="email" class="form-label"><b>Email</b></label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="Email">
				</div>
				<div class="mb-3">
					<label for="pwd" class="form-label"><b>Password</b></label>
					<input type="password" class="form-control" id="password" placeholder="Enter password" name="Password">
				</div>
				<div class="mb-3">
					<label for="Address" class="form-label"><b>Address</b></label>
					<input type="Address" class="form-control" id="Address" placeholder="Address" name="Address">
				</div>
				<div class="mb-3">
					<label for="Mobile" class="form-label"><b>Mobile</b></label>
					<input type="Mobile" class="form-control" id="Mobile" placeholder="Mobile" name="Mobile">
				</div>
				
				<div class="from-group mb-3">
					<label for="inputstate"><b>Country</b></label>
					<select id="inputstate" name="Countries_Id" class="form-control">
					<option value="">Select Country</option>
					<?php
					if(!empty($Countries_arr))
					{
						foreach($Countries_arr as $c)
						{
							?>
							<option value="<?php echo $c->Countries_Id?>"><?php echo $c->Countries_name?></option>
							<?php
						}
					}
					?>
					</select>
				</div>
				
				<div class="mb-3">
					<label for="file" class="form-label"><b>File</b></label>
					<input type="file" name="file" class="form-control">
				</div>
				
				<!--<div class="form-check mb-3">
					<label class="form-check-label">Gender:</label><br>
					Male<input type="radio" id="gender" name="gender" value="Male">
					Female<input type="radio"id="gender" name="gender" value="Female">
					Others<input type="radio" name="gender" id="gender">
				</div>
				<div class="form-check mb-3">
					<label class="form-check-label">Language:</label><br>
					Hindi<input type="checkbox" name="language[]" value="Hindi">
					English<input type="checkbox" name="language[]" value="English">
					Gujarati<input type="checkbox" name="language[]" value="Gujarati">
				</div>-->
				<!--<br><div class="from-group">
					<label for="name">Image Upload</label>
					<input type="file" name="file" class="form-control">
				</div>-->
				<button type="submit" name="submit" class="btn btn-style btn-dark btn-contact">Sign Up</button>
				<a class="float-right" href="login">If you already Register then click login</a>
			</form>
        </div>
    </div>
  </div>

<!--//contact-->
  <!--/w3l-footer-29-main-->
  <?php
  include_once('footer.php');
  ?>
  <!-- //footer-29 block -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>