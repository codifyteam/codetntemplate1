<?php
include "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <!--Favicon ico-->
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title><?php echo $lang['title'] ?></title>
    <!-- Meta Description -->
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords"
          content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/banner.css">
    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body id="body">

<!-- preloader -->
<div id="preloader">
    <div class="preload">
        <img class="airplane" src="./img/airplane.png" alt="airplane">
        <h3 class="typewriter">Loading...</h3>
        <img class="cloud1" src="./img/cloud.png" alt="cloud1">
        <img class="cloud2" src="./img/cloud.png" alt="cloud2">
        <img class="cloud3" src="./img/cloud.png" alt="cloud3">
    </div>
</div>
<!-- end preloader -->

<!--
Fixed Navigation
==================================== -->
<div id="particles-background" class="vertical-centered-box " ></div>
<div id="particles-foreground" class="vertical-centered-box " ></div>

<header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <!-- /responsive nav button -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current"><a href="#body"><strong><?php echo ucwords($lang['home']) ?></strong></a></li>
                <li><a href="#features"><strong><?php echo ucwords($lang['services']) ?></strong></a></li>
                <li><a href="#works"><strong><?php echo ucwords($lang['work']) ?></strong></a></li>
                <li><a href="#team"><strong><?php echo ucwords($lang['partners']) ?></strong></a></li>
                <li><a href="#contact"><strong><?php echo ucwords($lang['contact']) ?></strong></a></li>
            </ul>
        </nav>
        <!-- /main nav -->
        <a href="index.php?lang=ar"><img class="flag" alt="arabe" height="32" src="img/flags/tn.svg"/> </a> |
        <a href="index.php?lang=en"><img class="flag" alt="francais" height="32" src="img/flags/um.svg"/></a> |
        <a href="index.php?lang=fr"><img class="flag" alt="anglais" height="32" src="img/flags/fr.svg"/></a>


    </div>
</header>
<!--
End Fixed Navigation
==================================== -->


<!--
Home Slider
==================================== -->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Indicators bullet -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- End Indicators bullet -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <!-- single slide -->
            <div class="item active" >

            
            
                <div class="carousel-caption">
                    <h2 data-wow-duration="1500ms" data-wow-delay="500ms" class="typewriter wow bounceInDown animated">Meet<span> CodifyTeam</span>!
                    </h2>
                    <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span>
                        Coding and Training Agency</h3>
                    <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals</p>

                    <ul class="social-links text-center">
                        <li><a href="https://www.facebook.com/codetunisia/"><i class="fa fa-facebook fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end single slide -->

            <!-- single slide -->
            <div class="item">
                <div class="carousel-caption">
                    <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> codifyTeam</span>!
                    </h2>
                    <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span
                                class="color"><?php echo $lang['web'] ?></span>
                        & <?php echo $lang['mobile development'] ?></h3>
                    <p data-wow-duration="500ms" class="wow slideInRight animated">We are a team of professionals</p>

                    <ul class="social-links text-center">
                        <li><a href="https://www.facebook.com/codetunisia/"><i class="fa fa-facebook fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end single slide -->

        </div>
        <!-- End Wrapper for slides -->

    </div>
</section>

<!--
End Home SliderEnd
==================================== -->

<!--
Features
==================================== -->

<section id="features" class="features">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <h2><?php echo ucwords($lang['services']) ?></h2>
                <div class="devider"><i class="fa fa-heart fa-lg"></i></div>
            </div>

            <!-- service item -->
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-github fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3><?php echo ucwords($lang['web development']) ?></h3>
                        <p><?php echo ucwords($lang['we provide service of web development']) ?></p>
                    </div>
                </div>
            </div>
            <!-- end service item -->

            <!-- service item -->
            <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-pencil fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3><?php echo ucwords($lang['training']) ?></h3>
                        <p><?php echo $lang['We provide training sessions for kids,juniors and adults'] ?></p>
                    </div>
                </div>
            </div>
            <!-- end service item -->

            <!-- service item -->
            <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fa fa-bullhorn fa-2x"></i>
                    </div>

                    <div class="service-desc">
                        <h3><?php echo ucwords($lang['video intros']) ?></h3>
                        <p><?php echo ucwords($lang['we provide video intros']) ?></p>
                    </div>
                </div>
            </div>
            <!-- end service item -->

        </div>
    </div>
</section>

<!--
End Features
==================================== -->


<!--
Our Works
==================================== -->

<section id="works" class="works clearfix">
    <div class="container">
        <div class="row">

            <div class="sec-title text-center">
                <h2><?php echo $lang['works'] ?></h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center">
                <p><?php echo $lang['some of our realisations'] ?></p>
            </div>

            <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                <ul class="text-center">
                    <li><a href="javascript:;" data-filter="all" class="active filter"><?php echo $lang['all'] ?></a>
                    </li>
                    <li><a href="javascript:;" data-filter=".branding"
                           class="filter"><?php echo $lang['branding'] ?></a></li>
                    <li><a href="javascript:;" data-filter=".web" class="filter"><?php echo $lang['web'] ?></a></li>
                    <li><a href="javascript:;" data-filter=".training"
                           class="filter"><?php echo $lang['training'] ?></a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="project-wrapper">

        <figure class="mix work-item training">
            <img src="img/works/item-1.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                <h4>1</h4>
                <p>1</p>
            </figcaption>
        </figure>
        <figure class="mix work-item training">
            <img src="img/works/item-2.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                <h4>2</h4>
                <p>2</p>
            </figcaption>
        </figure>
        <figure class="mix work-item training">
            <img src="img/works/item-3.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-3.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                <h4>3</h4>
                <p>3</p>
            </figcaption>
        </figure>

        <figure class="mix work-item branding">
            <img src="img/works/item-4.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-5.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                <h4>4</h4>
                <p>4</p>
            </figcaption>
        </figure>

        <figure class="mix work-item web">
            <img src="img/works/item-5.jpg" alt="">
            <figcaption class="overlay">
                <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/works/item-6.jpg"><i
                            class="fa fa-eye fa-lg"></i></a>
                <h4>5</h4>
                <p>5</p>
            </figcaption>
        </figure>

    </div>


</section>

<!--
End Our Works
==================================== -->

<!--
Meet Our Team
==================================== -->

<section id="team" class="team">
    <div class="container">
        <div class="row partners-row">
            <div class="sec-title text-center">
                <h2><?php echo $lang['partners'] ?></h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center">
                <p><?php echo $lang['our partners'] ?></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="img/partners/partner1.png" height="100"/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="img/partners/partner2.png" height="100"/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="img/partners/partner3.jpg" height="100"/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img src="img/partners/partner4.png" height="100"/>
            </div>

        </div>
    </div>
</section>

<!--
End Meet Our Team
==================================== -->

<!--
Pricing
==================================== -->

<section id="team" class="team">
    <div class="container">
        <div class="row partners-row">
            <div class="sec-title text-center">
                <h2><?php echo $lang['pricing tables'] ?></h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center">
                <p><?php echo $lang['our prices'] ?></p>
            </div>

            <div class="pricing-table">
                <div class="ptable-item">
                    <div class="ptable-single">
                        <div class="ptable-header">
                            <div class="ptable-title">
                                <h2><?php echo $lang['one page'] ?></h2>
                            </div>
                            <div class="ptable-price">
                                <h2><small><?php echo $lang['from'] ?></small><?php echo $lang['onepage-price'] ?></h2>
                            </div>
                        </div>
                        <div class="ptable-body">
                            <div class="ptable-description">
                                <ul>
                                    <li><?php echo $lang['CMS user friendly'] ?></li>
                                    <li><?php echo $lang['3 months Free Assistance'] ?></li>
                                    <li><?php echo $lang['Responsive Design'] ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ptable-footer">

                        </div>
                    </div>
                </div>

                <div class="ptable-item featured-item">
                    <div class="ptable-single">
                        <div class="ptable-header">
                            <div class="ptable-title">
                                <h2><?php echo $lang['real estate'] ?></h2>
                            </div>
                            <div class="ptable-price">
                                <h2><small><?php echo $lang['from'] ?></small><?php echo $lang['immo-price'] ?></h2>
                            </div>
                        </div>
                        <div class="ptable-body">
                            <div class="ptable-description">
                                <ul>
                                    <li><?php echo $lang['CMS user friendly'] ?></li>
                                    <li><?php echo $lang['3 months Free Assistance'] ?></li>
                                    <li><?php echo $lang['Responsive Design'] ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ptable-footer">

                        </div>
                    </div>
                </div>

                <div class="ptable-item">
                    <div class="ptable-single">
                        <div class="ptable-header">
                            <div class="ptable-title">
                                <h2><?php echo $lang['ecommerce'] ?></h2>
                            </div>
                            <div class="ptable-price">
                                <h2><small><?php echo $lang['from'] ?></small><?php echo $lang['ecommerce-price'] ?>
                                </h2>
                            </div>
                        </div>
                        <div class="ptable-body">
                            <div class="ptable-description">
                                <ul>
                                    <li><?php echo $lang['CMS user friendly'] ?></li>
                                    <li><?php echo $lang['3 months Free Assistance'] ?></li>
                                    <li><?php echo $lang['Responsive Design'] ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ptable-footer">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--
End Pricing
==================================== -->

<!--
Some fun facts
==================================== -->

<section id="facts" class="facts">
    <div class="parallax-overlay">
        <div class="container">
            <div class="row number-counters">

                <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                    <h2><?php echo $lang['statistics'] ?></h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <!-- first count item -->
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="counters-item">
                        <i class="fa fa-map-marker fa-3x"></i>
                        <strong data-to="4"><?php echo $lang['locations'] ?></strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p><?php echo $lang['Sousse,Tunis ,Ariana & Bizerte'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                     data-wow-delay="300ms">
                    <div class="counters-item">
                        <i class="fa fa-users fa-3x"></i>
                        <strong data-to="8">0</strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p><?php echo $lang['partners'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                     data-wow-delay="600ms">
                    <div class="counters-item">
                        <i class="fa fa-coffee fa-3x"></i>
                        <strong data-to="2000">0</strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p><?php echo $lang['cups of coffee'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                     data-wow-delay="900ms">
                    <div class="counters-item">
                        <i class="fa fa-github fa-3x"></i>
                        <strong data-to="90">0</strong>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <p><?php echo $lang['repositories'] ?></p>
                    </div>
                </div>
                <!-- end first count item -->

            </div>
        </div>
    </div>
</section>

<!--
End Some fun facts
==================================== -->


<!--
Contact Us
==================================== -->

<section id="contact" class="contact">
    <div class="container">
        <div class="row mb50">

            <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2><?php echo $lang['Let\'s Discuss'] ?></h2>
                <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
            </div>

            <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                <p><?php echo $lang['you can contact us in order to have more details'] ?></p>
            </div>

            <!-- contact address -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                <div class="contact-address">
                    <h3><?php echo ucwords($lang['join us!']) ?></h3>
                </div>
            </div>
            <!-- end contact address -->

            <!-- contact form -->
            <p><?php echo $lang['Send Email'] ?></p>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                 data-wow-delay="300ms">
                <div class="contact-form">
                    <form class="contact-form" action="contactform.php" method="post">
                        <div class="input-group name-email">
                            <div class="input-field">
                                <input type="text" name="name" id="name" placeholder="<?php echo $lang['name'] ?>"
                                       class="form-control">
                            </div>
                            <div class="input-field">
                                <input type="email" name="mail" id="email" placeholder="<?php echo $lang['email'] ?>"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="input-field">
                            <input type="text" name="subject" placeholder="<?php echo $lang['subject'] ?>"
                                   class="form-control">
                        </div>
                        <div class="input-group">
                            <textarea name="message" placeholder="<?php echo $lang['message'] ?>"
                                      class="form-control"></textarea>
                        </div>
                        <div class="input-group">
                            <input type="submit" name="<?php echo $lang['submit'] ?>" class="pull-right"/>
                        </div>
                    </form>
                </div>
            </div>

            <!-- end contact form -->

            <!-- footer social links -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/codetunisia/"><i class="fa fa-facebook fa-2x"></i></a></li>
                </ul>
            </div>
            <!-- end footer social links -->

        </div>
    </div>

    <!-- Google map -->
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Ariana&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://putlocker-is.org"></a><br>
            <style>.mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 100%;
                }</style>
            <a href="https://www.embedgooglemap.net">google map for free</a>
            <style>.gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 100%;
                }</style>
        </div>
    </div>
    <!-- End Google map -->

</section>

<!--
End Contact Us
==================================== -->


<footer id="footer" class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                <div class="footer-single">
                    <img height="100px" src="img/footer-logo.png" alt="codetn logo"/>
                    <p class="firstparafooter"><?php echo $lang['we provide web training and development'] ?></p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                 data-wow-delay="600ms">
                <div class="footer-single">
                    <h6><?php echo $lang['explore'] ?></h6>
                    <ul>
                        <li><a href="https://github.com/codifyteam">Github</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright text-center">
                    Copyright © <?php echo date("Y"); ?> <a href="http://code.tn/">codifyTeam</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Single Page Nav -->
<script src="js/jquery.singlePageNav.min.js"></script>
<!-- Twitter Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- jquery.fancybox.pack -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- jquery.mixitup.min -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- jquery.parallax -->
<script src="js/jquery.parallax-1.1.3.js"></script>
<!-- jquery.countTo -->
<script src="js/jquery-countTo.js"></script>
<!-- jquery.appear -->
<script src="js/jquery.appear.js"></script>
<!-- Contact form validation -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!-- jquery easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- jquery easing -->
<script src="js/wow.min.js"></script>
<script>
    var wow = new WOW({
            boxClass: 'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120,          // distance to the element when triggering the animation (default is 0)
            mobile: false,       // trigger animations on mobile devices (default is true)
            live: true        // act on asynchronously loaded content (default is true)
        }
    );
    wow.init();
</script>
<!-- Custom Functions -->
<script src="js/custom.js"></script>
<script src="js/banner.js"></script>
</body>
</html>
