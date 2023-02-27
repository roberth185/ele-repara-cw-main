<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Easton - php 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="http://elerepara.pt/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet"> 
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.php"><img src="http://elerepara.pt/assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.php">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <?php include "common/header.php"; ?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <?php include "common/mobile-menu.php"; ?>
        <!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(http://elerepara.pt/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Team Details</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Team Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- team-details -->
        <section class="team-details p_relative">
            <div class="pattern-layer" style="background-image: url(http://elerepara.pt/assets/images/shape/shape-47.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                        <div class="image-box mr_30">
                            <div class="shape" style="background-image: url(http://elerepara.pt/assets/images/shape/shape-46.png);"></div>
                            <figure class="image"><img src="http://elerepara.pt/assets/images/team/team-13.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                        <div class="content-box ml_20">
                            <h2>Gerard Butler</h2>
                            <span class="designation">Electrician</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud exercite ation ullamco laboris nis aliquip.</p>
                            <ul class="info-list clearfix">
                                <li><span>Responsibility:</span>Lead Developer</li>
                                <li><span>Address:</span>North Helenavile, FV77 8WS</li>
                                <li><span>Experience:</span>7 Years</li>
                                <li><span>Email:</span><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><span>Phone:</span><a href="tel:12304573407">+1 (230)-457-34-07</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="team-details.php"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="team-details.php"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="team-details.php"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-details end -->


        <!-- personal-info -->
        <section class="personal-info bg-color-4 p_relative">
            <div class="auto-container">
                <div class="text">
                    <h3>Personal Info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incidid unt labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in repre henderit in voluptate velit esse cillum dolore sed ut perspiciatis unde omnis iste natus error sit voluptatem acus antium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae dicta sunt explicabo.</p>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem.</p>
                </div>
            </div>
        </section>
        <!-- personal-info end -->


        <!-- skills-section -->
        <section class="skills-section p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 skills-column">
                        <div class="skills-inner mr_30">
                            <div class="text">
                                <h3>My Skills</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incidid unt labore et dolore magna aliqua.</p>
                            </div>
                            <div class="progress-box">
                                <div class="progress-box p_relative d_block mb_35">
                                    <h6>Analysis</h6>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%"><div class="count-text">95%</div></div>
                                    </div>
                                </div>
                                <div class="progress-box p_relative d_block mb_35">
                                    <h6>SEO Audit</h6>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%"><div class="count-text">70%</div></div>
                                    </div>
                                </div>
                                <div class="progress-box p_relative d_block">
                                    <h6>Optimization</h6>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%"><div class="count-text">90%</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 education-column">
                        <div class="education-inner ml_30">
                            <div class="text">
                                <h3>Education</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incidid unt labore et dolore magna aliqua.</p>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <span>2017</span>
                                        <h5>Interaction Designer</h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit sed do eiumod tempor incididunt.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <span>2019</span>
                                        <h5>School of Technology</h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit sed do eiumod tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skills-section end -->


        <!-- subscribe-section -->
        <section class="subscribe-section p_relative">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text p_relative d_block">
                                <h2>Subscribe to Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner p_relative d_block">
                                <form action="index.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your email address" required="">
                                        <button type="submit">Subscribe Now<i class="icon-7"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <?php include "common/footer.php"; ?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
