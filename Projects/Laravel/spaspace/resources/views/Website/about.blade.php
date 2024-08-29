@extends('Website.Layout.structure-2')


@section('main_container')

	<div class="w3l-about-us best-services py-5">
		<div class="container py-lg-5 py-sm-4">
			<div class="maghny-gd-1">
				<div class="row about-text">
					<div class="col-lg-6">
						<h3 class="hny-title">Best Beauty & Spa in London since 2000. Our parlour has been present for
							over 16
							years.</h3>
					</div>
					<div class="col-lg-6 mt-lg-0 mt-4">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit tempore sapiente, distinctio
							perferendis voluptas consequatur quaerat incidunt. Similique, officia! Dolorum fugiat et
							aliquam
							necessitatibus quas reiciendis, totam voluptatibus deleniti tempore doloribus dolor modi, ab
							facilis quam officiis ipsam doloremque.</p>
						<p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus veritatis
							incidunt iste totam,
							consequuntur minus assumenda commodi sint asperiores. Voluptatibus incidunt alias.</p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="maghny-gd-1 col-lg-4 col-md-6">
						<div class="maghny-grid">
							<figure class="effect-lily border-radius">
								<img class="img-fluid" src="{{url('Website/assets/images/ab.jpg')}}">
								<figcaption class="w3set-hny">
									<div>
										<h4>Top Salon <span> Parlour</span></h4>
										<p>Spa </p>
									</div>

								</figcaption>
							</figure>
						</div>
					</div>
					<div class="maghny-gd-1 col-lg-4 col-md-6 mt-md-0 mt-4">
						<div class="maghny-grid">
							<figure class="effect-lily border-radius">
								<img class="img-fluid" src="{{url('Website/assets/images/ab2.jpg')}}">
								<figcaption class="w3set-hny">
									<div>
										<h4>Spa and Wellness <span> Parlour</span></h4>
										<p>Pedicure </p>
									</div>

								</figcaption>
							</figure>
						</div>
					</div>
					<div class="maghny-gd-1 col-lg-4 col-md-6 mt-lg-0 mt-4">
						<div class="maghny-grid">
							<figure class="effect-lily border-radius">
								<img class="img-fluid" src="{{url('Website/assets/images/ab3.jpg')}}">
								<figcaption class="w3set-hny">
									<div>
										<h4>Beauty Spa <span> Parlour</span></h4>
										<p>Facial </p>
									</div>

								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //bottom-grids -->
	<section class="w3l-about4" id="about">
		<div class="new-block py-5">
			  
				<div class="container">
				<div class="pop-img-ab position-relative">
					<div class="history-info">
				  <!-- <a href="#popup-video" class="play-view text-center position-absolute">
							  <span class="video-play-icon">
								  <span class="fa fa-play"></span>
							  </span>
						  </a> -->
	  
				  <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
					<span class="video-play-icon">
					  <span class="fa fa-play"></span>
					</span>
				  </a>
	  
				  <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
				  <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<iframe src="https://player.vimeo.com/video/74254578" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	  </section>
	   <!-- //content-6-section -->
	<div class="w3l-bottom-grids py-5">
		<div class="container py-lg-5">
			<div class="row bottomhny-grids-sec align-items-center">
				<div class="col-lg-6 bottomhny-1">
					<img class="img-fluid" src="{{url('Website/assets/images/banner1.jpg')}}">
				</div>
				<div class="col-lg-6 bottomhny-gd-ingf pl-lg-5 mt-lg-0 mt-5">
					<h6 class="sub-title">Why Choose Us</h6>
					<h3 class="hny-title">The Best for You</h3>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam id quisquam ipsam
						molestiae ad eius accusantium? Nulla dolorem perferendis inventore! posuere cubilia Curae;
						Nunc non risus in justo convallis feugiat.</p>
					<div class="ready-more mt-lg-5 mt-4">
						<a class="btn btn-style btn-primary" href="about">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //bottom-grids -->
	<!-- team -->
	<section class="w3l-team" id="team">
		<div class="team-block py-5">
			<div class="container py-lg-5">
				<div class="wthree-title text-center mb-lg-0 mb-4">
					<h6 class="sub-title">Our Team</h6>
					<h3 class="hny-title">Meet Our Therapists</h3>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6 mt-lg-5 mt-3">
						<div class="box16">
							<a href="#url"><img src="{{url('Website/assets/images/team1.jpg')}}" alt="" class="img-fluid" /></a>
							<div class="box-content">
								<h3 class="title"><a href="#url">Victoria</a></h3>
								<span class="post">Director</span>
								<ul class="social">
									<li>
										<a href="#" class="facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mt-lg-5 mt-3">
						<div class="box16">
							<a href="#url"><img src="{{url('Website/assets/images/team2.jpg')}}" alt="" class="img-fluid" /></a>
							<div class="box-content">
								<h3 class="title"><a href="#url">Michael</a></h3>
								<span class="post">Managing Director</span>
								<ul class="social">
									<li>
										<a href="#" class="facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mt-lg-5 mt-3">
						<div class="box16">
							<a href="#url"><img src="{{url('Website/assets/images/team3.jpg')}}" alt="" class="img-fluid" /></a>
							<div class="box-content">
								<h3 class="title"><a href="#url">George</a></h3>
								<span class="post">Designer</a></span>
								<ul class="social">
									<li>
										<a href="#" class="facebook">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //team -->

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