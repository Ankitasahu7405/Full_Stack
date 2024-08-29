<?php
if (session()->has('id')) {
} 
else 
{
	echo "<script> 
			window.location='/';
		</script>";
}

?>

@extends('Website.Layout.structure-2')


@section('main_container')

	<!-- //content-6-section -->
	<div class="w3l-bottom-grids py-5">
		<div class="container py-lg-5">
			<h6 class="sub-title text-center">PROFILE</h6>
			<h3 class="hny-title text-center mb-lg-5 mb-4">My Account</h3>
			<div class="row bottomhny-grids-sec align-items-center">
				<div class="col-lg-6 bottomhny-1">
					<img class="img-fluid" src="{{url('Website/assets/images/Girl.png')}}"/>
				</div>
				<div class="col-lg-6 bottomhny-gd-ingf pl-lg-5 mt-lg-0 mt-5">	
					<div class="ready-more mt-lg-5 mt-0">
						<h3 class="hny-title sub-title text-danger">Hiii... <?php echo $fetch->name?></h3><br/>
						<ul class="ml-4">
							<li><i class="hny-title"></i>Id : <?php echo $fetch->id;?></li><br/>
							<li><i class="hny-title"></i>Name : <?php echo $fetch->name;?></li><br/>
							<li><i class="hny-title"></i>Email : <?php echo $fetch->email?></li><br/>
							<li><i class="hny-title"></i>Mobile : <?php echo $fetch->mobile;?></li><br/>
							<li><i class="hny-title"></i>Address : <?php echo $fetch->address;?></li><br/>
						</ul>
						<a class="btn btn-style btn-danger" href="profile/<?php echo $fetch->id;?>">Edit Profile</a>
						<a class="btn btn-style btn-danger" href="change_pass">Change Password</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //content-6-section -->
	
<script src="{{url('Website/assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- disable body scroll which navbar is in active -->
<script src="{{url('Website/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- stats -->
<script src="{{url('Website/assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('Website/assets/js/jquery.countup.js')}}"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

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
<script src="{{url('Website/assets/js/bootstrap.min.js')}}"></script>
@endsection