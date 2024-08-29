
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
	<title>Spa Cosmetic</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{url('Website/assets/css/style-starter.css')}}">
	<!-- Template CSS -->
	<link
		href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
@include('sweetalert::alert')
	<!--header-->
	<header id="site-header" class="fixed-top">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<h1> <a class="navbar-brand" href="index">
						<span class="sub-logo">G</span>lory <span class="sub-logo">S</span>pa & Cosmetic
					</a></h1>
				<!-- if logo is image enable this   
        <a class="navbar-brand" href="#index">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
					data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active" style="margin-top:10px;">
							<a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item" style="margin-top:10px;">
							<a class="nav-link" href="about">About</a>
						</li>
						<li class="nav-item" style="margin-top:10px;">
							<a class="nav-link" href="services">Services</a>
						</li>
						
						<li class="nav-item" style="margin-top:10px;">
							<a class="nav-link" href="contact">Contact</a>
						</li>
						<div class="nav-link" style="margin-left:10px;margin-top:-11px;">
							@if(session()->has('id'))
								<a href="#">
								<i class="fa fa-user" aria-hidden="true"></i>
								<span>
									hi.. {{session('name')}}
								</span>
								</a>
								<li class="nav-item" style="margin-top:20px;">
									<a class="fa fa-user" aria-hidden="true" href="profile"> My Account</a>
								</li>
								<a href="userlogout">
								<span class="btn btn-danger ml-3 mt--1">
									Logout
								</span>
								</a>
							@else
							<li class="nav-item" style="margin-top:19px;">
								<a href="login">
									<i class="fa fa-user" aria-hidden="true"></i>
									<span>
										Login
									</span>
								</a>
							</li>
							@endif							
						</div>
					</ul>
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" class="hnysearch-icon" title="search"><span class="fa fa-search"
								aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<h3 class="hny-title two">Search Here</h3>
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<a href="#domain" class="domain" data-toggle="modal" data-target="#DomainModal">
							<div class="hamburger1">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</a>

						<!--//search-right-->
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--/header-->


	<!-- Domain Modal -->
	<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>

				<div class="modal-body">
					<div class="modal__content">
						<h2 class="logo"><a class="logo-brand" href="index">
								<span class="sub-logo">G</span>lory <span class="sub-logo">L</span>uxe
							</a></h2>
						<!-- if logo is image enable this   
			<h2 class="logo">
			  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</h2> -->
						<p class="mt-md-3 mt-2">Lorem ipsum dolor sit amet, elit. Eos expedita ipsam at fugiat ab.</p>
						<div class="widget-menu-items mt-sm-5 mt-4">
							<h5 class="widget-title">Menu Items</h5>
							<nav class="navbar p-0">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="index">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="about">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="services">Services</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="contact">Contact</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="widget-social-icons mt-sm-5 mt-4">
							<h5 class="widget-title">Contact Us</h5>
							<ul class="icon-rounded address">
								<li>
									<p> #135 block, Barnard St. Brooklyn, <br>NY 10036, USA</p>
								</li>
								<li class="mt-3">
									<p><span class="fa fa-phone"></span> <a
											href="tel:+404-11-22-89">+1-2345-345-678-11</a></p>
								</li>
								<li class="mt-2">
									<p><span class="fa fa-envelope"></span> <a
											href="mailto:medpillhospital@mail.com">gloryluxe@mail.com</a></p>
								</li>
								<li class="top_li1 mt-2">
									<p><span class="fa fa-clock-o"></span> <a href="mailto:medpillhospital@mail.com">Mon
											- Sun 09:00 - 21:00
										</a></p>
								</li>
							</ul>
						</div>
						<div class="widget-social-icons mt-sm-5 mt-4">
							<h5 class="widget-title">Follow Us</h5>
							<ul class="icon-rounded">
								<li><a class="social-link twitter" href="#url" target="_blank"><i
											class="fa fa-twitter"></i></a></li>
								<li><a class="social-link linkedin" href="#url" target="_blank"><i
											class="fa fa-linkedin"></i></a></li>
								<li><a class="social-link tumblr" href="#url" target="_blank"><i
											class="fa fa-tumblr"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- //modal-content -->
		</div>
		<!-- //modal-dialog -->
	</div>
	<!-- //Domain modal -->
	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">Show the world a healthy face!</h4>
										<h5>Healing body, mind, and spirit!</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="services">Our Services</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">Feel natural, be natural.</h4>
										<h5>Creating your beauty at New Level</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="services">Our Services</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">Show the world a healthy face!</h4>
										<h5>See yourself in a New Light.</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="services">Our Services</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg text-center">
										<h4 class="sub-font">Feel natural, be natural.</h4>
										<h5>Creating your beauty at New Level</h5>
										<div class="banner-buttons mt-md-5 mt-4">
											<a class="btn btn-style btn-primary" href="services">Our Services</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
			<div class="banhny-timing">MON - Sun : 7:00AM - 8:00PM </div>
			<div class="banhny-left-botm">Natural & Glowing Makeup Look</div>
			<div class="scrollhny-btn">
				<a class="btn-btmhny scroll" href="#about">
					<div class="scroll-arrow"></div>
					<div class="scroll-arrow"></div>
					<div class="scroll-arrow"></div>
				</a>

			</div>

		</div>

	</section>
	<!-- //banner-slider-->
	<!-- main-slider -->