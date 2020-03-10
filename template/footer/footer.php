<!-- footer start -->
<footer>
    <div class="container">
        <a href="index.html">
            <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/brand/mian-logo-light.svg" class="main-logo" alt="main-logo">
        </a>
        <div class="row">
            <div class="col-md-5">
                <address class="footer-address">
                    House No.40-D, Ground Floor, <br class="d-none d-sm-block" />
                    Jia Sarai Near IIT,<br class="d-none d-sm-block" />
                    Hauz Khas,<br class="d-none d-sm-a" />
                    New Delhi-16
                </address>
                <ul class="footer-contact-list">
                    <li>
                        <a href="tel:+91 00 000 000">+91 00 000 000</a>
                    </li>
                    <li>
                        <a href="mailto:email@gmail.com">email@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <h6 class="footer-links-heading">Biotechnology</h6>
                <ul class="footer-link-list">
                    <li><a href="courses.php">Online Courses</a></li>
                    <li><a href="courses.php">Previous Year Papers Questions</a></li>
                    <li><a href="courses.php">Previous Year Papers Answers</a></li>
                    <li><a href="courses.php">Free Study Materials</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6 class="footer-links-heading">Chemistry</h6>
                <ul class="footer-link-list">
                    <li><a href="courses.php">Online Courses</a></li>
                    <li><a href="courses.php">Previous Year Papers Questions</a></li>
                    <li><a href="courses.php">Previous Year Papers Answers</a></li>
                    <li><a href="courses.php">Free Study Materials</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="footer-social-list d-flex align-items-center mb-0">
                        <li>
                            <a href="">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/footer/twitter.svg">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/footer/facebook.svg">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/footer/whatsapp.svg">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/images/footer/youtube.svg">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="footer-bottom-right-list float-right d-flex align-items-center mb-0">
                        <li>
                            <a href="">About Vigyanan</a>
                        </li>
                        <li>
                            © Vigyanan 2020
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- js links -->

<script type="text/javascript" src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/js/owl-carousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/assets/js/myscript.js"></script>
<!-- header js start -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.mobile-menu input[type="checkbox"]').click(function() {
            if ($(this).is(":checked")) {
                $(".mobile-menu").addClass("open-slider");
            } else if ($(this).is(":not(:checked)")) {
                $(".mobile-menu").removeClass("open-slider");
            }
        });
    });
</script>
<!-- header js end -->

<!-- owl carousel js start -->
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin:25,
        nav:false,
        dots: false,
        stagePadding: 100,
        autoplay: true,
        heightAuto:true,
        responsive:{
            0:{
                items:1,
                stagePadding: 0
            },
            576:{
                items:1,
                stagePadding: 0
            },
            768:{
                items:2,
                stagePadding: 40
            },
            992:{
                items: 2,
                stagePadding: 0
            },
            1100:{
                items: 2
            },
            1240:{
                items:3
            }
        }
    })
</script>
<!-- owl carousel js end -->

<script type="text/javascript">
    $(document).ready(function(){
        $('.dropdown-submenu a.dropdown-toggle').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
</body>
</html>