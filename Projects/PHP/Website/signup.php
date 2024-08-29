<?php
	include_once('header_2.php');
?>

<!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Sign Up</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index">Home</a></li>
                    <li><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Sign Up</li>
                </ul>
            </div>
        </section>
    </div>
<!-- //inner banner -->
<!-- contact -->
    <section class="w3l-contacts-12 py-5">
        <div class="container py-lg-5 py-md-4 py-3">
            <h3 class="title-style mb-5">Registration Here</h3>
            <div class="row contact-grids" style="margin-left:160px;">
                <div class="col-lg-12 contacts12-main">
                    <form action="" method="post" class="signin-form" enctype="multipart/form-data">
                        <div class="row input-grids">
                            <div class="col-sm-10">
                                <input type="text" name="name" placeholder="Full name" class="contact-input" />
                            </div>
                            <div class="col-sm-10 mt-sm-3 mt-4">
                                <input type="email" name="email" placeholder="Your email" class="contact-input" />
                            </div>
                        </div>
                        <div class="row input-grids my-4">
                            <div class="col-sm-10">
                                <input type="password" name="password" placeholder="Password" class="contact-input" />
                            </div>
                            <div class="col-sm-10 mt-sm-3 mt-4">
                                <input type="text" name="mobile" placeholder="Phone number" class="contact-input" />
                            </div>
                        </div>
                        <div class="row input-grids">
                            <div class="col-sm-10">
                                <input type="text" name="address" placeholder="Address" class="contact-input" />
                            </div>
                        </div>
						<div class="row input-grids">
                            <div class="col-sm-10 mt-sm-3">
								<select name="cid" class="form-control bg-light mt-3">
									<option value="">Select Country</option>
									<?php
									if(!empty($Countries_arr))
									{
										foreach($Countries_arr as $c)
										{
									?>
									<option value="<?php echo $c->id?>"><?php echo $c->cnm?></option>
									<?php
										}
									}
									?>
								</select>
                            </div>
						</div>
						<div class="row input-grids">
                            <div class="col-sm-10 mt-sm-3 mt-4">
                                <input type="file" name="file" placeholder="Image" class="contact-input" />
                            </div>
                        </div>
                        <button class="btn button-style mt-5" name="submit" type="submit"><b>Sign Up</b></button>
						<a class="float-right mt-5 text-info" style="margin-right:165px;" href="login">If you already Register then click Login?</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- //contact page -->

<?php
	include_once('footer.php');
?>
    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
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
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
