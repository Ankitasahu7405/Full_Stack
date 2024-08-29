<?php
if (session()->has('id')) {
	
	echo "<script> 
	window.location='index';
	</script>";

}
?>


@extends('Website.Layout.structure-2')


@section('main_container')

	<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container py-lg-3">
				<div class="top-map">
					<div class="map-content-9">
						<div class="form-top1">
							<h6 class="sub-title text-center">Login</h6>
							<h3 class="hny-title text-center mb-lg-5 mb-4">Login Here</h3>
							<form action="{{url('/login_auth')}}" method="post">
							@csrf
								<div class="form-group">
									<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" style="margin-top:-20px" class="form-text text-danger">We'll never share your email with anyone else.</small>
									@error('email')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group">
									<input type="password" name="password" style="margin-top:30px" class="form-control" id="exampleInputPassword1" placeholder="Password">
									@error('password')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								
								<div class="text-center">
									<button type="submit" name="submit" class="btn">LOGIN</button>
								</div>
								
								<div class="container" style="margin-top:-10px;margin-left:13px">
									<span class="psw">Forgot <a href="Email_pass">password?</a></span>
								</div>
								
								<a href="signup" style="margin-top:-70px;margin-left:40px" class="form-text text-info">
									If you not registered then Signup Here!
								</a>
							</form>
						</div>
					</div>
					<div class="cont-details">
						<div class="cont-top london text-center">
							<h6><span class="fa fa-map-marker"></span> London Office</h6>
							<p>90 Maryam Springs Suite 260, Courbevoie, London, London</p>
							<p><a href="tel:+342 5897555">+342 5897556</a></p>
							<p><a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="cont-top paris text-center">
							<h6><span class="fa fa-map-marker"></span> Paris Office</h6>
							<p>20 Maryam Springs Suite 260, Courbevoie, Paris, Paris</p>
							<p><a href="tel:+442 5897555">+442 5897555</a></p>
							<p><a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="cont-top newyork text-center">
							<h6><span class="fa fa-map-marker"></span> New York Office</h6>
							<p>80 Maryam Springs Suite 260, Courbevoie, New York, USA</p>
							<p><a href="tel:+242 5897555">+242 5897554</a></p>
							<p><a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- //contact-form -->

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