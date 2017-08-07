<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ray-Ban | Game Zone </title>

    <meta name="description" content="Ray-Ban - Community contest platform">
    <meta name="keywords" content="">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/bower_components/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/bower_components/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="assets/bower_components/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="assets/bower_components/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="assets/bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" href="assets/bower_components/summernote/dist/summernote.css">

    <!-- Prism -->
    <link rel="stylesheet" type="text/css" href="assets/bower_components/prism/themes/prism-tomorrow.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="assets/css/goodgames.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>

    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
    <!--
like -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=380641915616881";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 
<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">
    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <?php include 'header.php';?>
    <!-- END: Navbar -->

</header>
   
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content hidden-lg-up">
    <div class="nano">
        <div class="nano-content">
            <a href="home.php" class="nk-nav-logo">
                <img src="assets/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
         <li><a href="#"></a></li>
         <li><span>Scoreboard</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
        
<!--scoreboard-->
<div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Score</span> Card</span></h4>
    <div class="nk-widget-content nk-teammate-card">
        <div class="nk-teammate-card-info">
                    <table>
                        <tbody>
                        <tr>
                            <td colspan="2">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><strong class="h5">Name:</strong>&nbsp;&nbsp;&nbsp;</td>
                                        <td><strong class="h5">SANG-HYEOK LEE</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="h5">Team:</strong>&nbsp;&nbsp;&nbsp;</td>
                                        <td><strong class="h5">Delhi</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="h5">Score:</strong>&nbsp;&nbsp;&nbsp;</td>
                                        <td><strong class="h5">80</strong></td>
                                    </tr>
                                    <tr>
                                        <td><strong class="h5">Level:</strong>&nbsp;&nbsp;&nbsp;</td>
                                        <td><strong class="h5">3</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong class="h3">60</strong>
                            </td>
                            <td>
                                <strong class="h5">Rapid Fire</strong>
                                <div>Game A</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong class="h3">20</strong>
                            </td>
                            <td>
                                <strong class="h5">Puzzle</strong>
                                <div>Game B</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong class="h3">0</strong>
                            </td>
                            <td>
                                <strong class="h5">Compare Pics</strong>
                                <div>Game C</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
    </div>
</div>

        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <i class="fa fa-hand-peace-o fa-2x" aria-hidden="true"></i>

                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">Top playes</a></h3>
                    <p>See who is rocking ahead of you</p>
                    <table>
                        <tbody>
                        <tr>
                            <td colspan="2">
                                <table>
                                    <tbody>
                                            <tr>
                                                <td><strong class="h5 nk-feature-title text-main-1">Name</strong>&nbsp;&nbsp;&nbsp;</td>
                                                <td><strong class="h5">#1</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong class="h5 nk-feature-title text-main-1">Team:</strong>&nbsp;&nbsp;&nbsp;</td>
                                                <td><strong class="h5">Delhi</strong></td>
                                            </tr>
                                    </tbody>

                                    <tbody>
                                            <tr>
                                                <td><strong class="h5 nk-feature-title text-main-1">Rank</strong>&nbsp;&nbsp;&nbsp;</td>
                                                <td><strong class="h5">#3</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong class="h5 nk-feature-title text-main-1">Team:</strong>&nbsp;&nbsp;&nbsp;</td>
                                                <td><strong class="h5">NCR</strong></td>
                                            </tr>
                                    </tbody>


                                </table>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h4 class="nk-feature-title text-main-1"><a href="#">Name</a></h4>

                    <br>
                    <h4 class="nk-feature-title text-main-1"><a href="#">Name</a></h4>

                    <br>
                    <h4 class="nk-feature-title text-main-1"><a href="#">Name</a></h4>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <i class="fa fa-trophy fa-3x" aria-hidden="true"></i>
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">Position </a></h3>
                    <p>Rookie</p>
                    <h4 class="nk-feature-title text-main-1">Level 5</h4>
                </div>
            </div>
        </div>
    </div>
    <!--end scoreboard-->
    

                            
    <div class="nk-gap-2"></div>
    <div class="nk-gap-2"></div>
    <!-- END: Most Popular -->
</div>

<div class="nk-gap-2"></div>
<!-- START: Footer -->
<?php include 'footer.php';?> 
<!-- END: Footer -->

        
</div>
<!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images/game.jpg" alt="">
    <img class="nk-page-background-bottom" src="assets/images/game.jpg" alt="">

<!-- END: Page Background -->

         
<!-- START: Scripts -->

<!-- GSAP -->
<script src="assets/bower_components/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Bootstrap -->
<script src="assets/bower_components/tether/dist/js/tether.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/bower_components/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/bower_components/jarallax/dist/jarallax.min.js"></script>
<script src="assets/bower_components/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="assets/bower_components/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="assets/bower_components/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/bower_components/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/bower_components/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Form -->
<script src="assets/bower_components/jquery-form/dist/jquery.form.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/moment-timezone/builds/moment-timezone-with-data.js"></script>

<!-- Hammer.js -->
<script src="assets/bower_components/hammer.js/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

<!-- SoundManager2 -->
<script src="assets/bower_components/SoundManager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="assets/bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="assets/bower_components/summernote/dist/summernote.min.js"></script>

<!-- nK Share -->
<script src="assets/plugins/nk-share/nk-share.js"></script>

<!-- Prism -->
<script src="assets/bower_components/prism/prism.js"></script>

<!-- GoodGames -->
<script src="assets/js/goodgames.min.js"></script>
<script src="assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->



<!-- Mirrored from html.nkdev.info/goodgames/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2017 05:48:00 GMT -->
</html>
