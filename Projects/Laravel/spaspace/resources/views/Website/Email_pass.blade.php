<?php
if (!(session()->has('id'))){
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
							<h6 class="sub-title text-center">Forgot Password</h6>
							<h3 class="hny-title text-center mb-lg-5 mb-4">Change Here!</h3>
							<form action="{{url('/forgot_pass')}}" method="post">
							@csrf								
								<div class="form-group">
									<input type="email" name="email" style="margin-top:30px" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
									@error('email')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								
								<div class="text-center">
									<button type="submit" name="submit" class="btn">Submit</button>
									
									<button type="submit">Send Password Reset Link</button>
								</div>
								
								
								<!-- <a href="signup" style="margin-top:-40px;margin-left:40px" class="form-text text-info">
									If you not registered then Signup Here!
								</a> -->
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