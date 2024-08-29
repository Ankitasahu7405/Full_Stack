<?php
	include_once('header_2.php');
?>

<!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Top Quality Services</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index">Home</a></li>
                    <li><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Services</li>
                </ul>
            </div>
        </section>
    </div>
<!-- //inner banner -->
<!-- services -->
    <div class="popular-wthree py-5">
        <div class="container py-lg-5 py-md-4 py-3">
            <div class="row">
                <div class="col-md-6 left-ser-texti">
                    <h4 class="theme-style-top">Our customers value us for the quality we provide</h4>
                </div>
                <div class="col-md-6 left-ser-texti">
                    <p class="mt-3">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus viertae
                        fringilla sapien, quis dictum mi. Quisque consectetur egestas.
                        Duis fermentum faucibus est, sed vehicula velit sodales vitae. Mauris mollis
                        loboerrtis turpis eget.</p>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-lg-3 col-sm-6 serv-block">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s1.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>Architecture</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 serv-block mt-sm-0 mt-4">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s3.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>LED Lighting</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 serv-block mt-lg-0 mt-4">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s2.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>Interior Design</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 serv-block mt-lg-0 mt-4">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s4.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>Decorating</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- second one -->
            <div class="row pt-lg-5 pt-md-4 pt-sm-3 mt-5">
                <div class="col-md-6 left-ser-texti">
                    <h4 class="theme-style-top">Everything what you need for home Designing</h4>
                </div>
                <div class="col-md-6 left-ser-texti">
                    <p class="mt-3">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus viertae
                        fringilla sapien, quis dictum mi. Quisque consectetur egestas.
                        Duis fermentum faucibus est, sed vehicula velit sodales vitae. Mauris mollis
                        loboerrtis turpis eget.</p>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-lg-3 col-sm-6 serv-block">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s6.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>Floor Planning</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 serv-block mt-sm-0 mt-4">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s2.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>Interior Design</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 serv-block mt-lg-0 mt-4">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s4.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>Decorating</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 serv-block mt-lg-0 mt-4">
                    <a href="#services">
                        <div class="services-wthree-grid">
                            <img src="assets/images/s5.jpg" class="img-fluid" alt="" />
                        </div>
                        <div class="popular-wthree-text">
                            <h5>Best Furnitures</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- //services -->

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

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
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
    <!-- //magnific popup -->

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
