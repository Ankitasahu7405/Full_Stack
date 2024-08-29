<?php
	include_once('header_2.php');
?>

<!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index">Home</a></li>
                    <li><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
                </ul>
            </div>
        </section>
    </div>
<!-- //inner banner -->
<!-- contact -->
    <section class="w3l-contacts-12 py-5">
        <div class="container py-lg-5 py-md-4 py-3">
            <h3 class="title-style mb-5">Contact Us</h3>
            <div class="row contact-grids">
                <div class="col-lg-7 contacts12-main">
                    <form action="" method="post" class="signin-form">
                        <div class="row input-grids">
                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="Full name" class="contact-input" />
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <input type="email" name="email" placeholder="Your email" class="contact-input" />
                            </div>
                        </div>
                        <div class="row input-grids my-4">
                            <div class="col-sm-6">
                                <input type="text" name="subject" placeholder="Subject" class="contact-input" />
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <input type="text" name="mobile" placeholder="Phone number" class="contact-input" />
                            </div>
                        </div>
                        <textarea name="comment" placeholder="Type your message here" required=""></textarea>
                        <button class="btn button-style mt-5" name="submit" type="submit">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-5 contact-right pl-xl-5 mt-lg-0 mt-5">
                    <div class="details-style d-flex">
                        <span class="fa fa-map"></span>
                        <div class="location-info">
                            <span>Location</span>
                            <p> Dolor sit, #PTH, 55030, 8500 Lorem Street</p>
                            <p>sed at ipsum, #2114 agro towers</p>
                            <p>United kingdom, UK.</p>
                        </div>
                    </div>
                    <div class="details-style d-flex">
                        <span class="fa fa-envelope-open"></span>
                        <div class="email-info">
                            <span>Have any Questions?</span>
                            <a href="mailto:Fruitant@examplemail.com"> Fruitant@examplemail.com</a>
                        </div>
                    </div>
                    <div class="details-style d-flex">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                            <span>Phone Number</span>
                            <a href="tel:(123) 456-78-90"> (123) 456-78-90</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
                    allowfullscreen=""></iframe>
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
