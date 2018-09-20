<?php
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http') {
    header('Location: https://mihai.tuhari.ro/me/');
    exit;
}
?><!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="14+ years experience as fullstack developer. PHP, MySQL, HTML, CSS, JS, jQuery, API, Laravel, RabbitMQ, WebSockets, 3rd Party APIs etc. Fast, reliable, responsive. No limits." property="og:description">
    <meta content="Mihai Tuhari - full stack web developer / fast. reliable. responsive" property="og:title"/>
    <meta name="author" content="Mihai Tuhari">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="j1arVouK2aGNkBnnAjQh9nLg4Zrn6_g9xt9UU8ff2W0"/>
    <meta content="index,follow" name="robots"/>
    <meta content="website" property="og:type"/>
    <meta content="https://mihai.tuhari.ro/me/" property="og:url"/>
    <meta content="https://mihai.tuhari.ro/me/assets/images/main/content/og.jpg" property="og:image"/>
    <meta content="Mihai Tuhari" property="og:site_name"/>

    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Mihai Tuhari - full stack web developer / fast. reliable. responsive</title>

    <link rel="icon" href="assets/images/tailor/content/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oxygen:400,700">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!--[if lt IE 9]>
    <script src="assets/bootstrap/js/html5shiv.min.js"></script>
    <script src="assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.custom.js"></script>
</head>
<body class="cssAnimate onepager">
<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments);
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m);
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-69164049-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="main">
    <div class="ct-topbar ct-topbar--default">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="ct-socials text-right">
                        <a href="https://github.com/mihaituhari" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub"><i class="fa fa-github"></i></a>
                        <a href="https://www.facebook.com/mihai.tuhari" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/mihaituhari" target="_blank" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        <a href="http://instagram.com/mihaituhari" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ct-navbarMobile">
        <div class="navbar-header">
            <img class="ct-logo-navbar--transparent" src="assets/images/main/content/logo.png" alt="Mihai Tuhari">
        </div>
        <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="ct-menuMobile">
        <ul class="ct-menuMobile-navbar">
            <li><a href="#header">start</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#works">work</a></li>
            <li><a href="#testimonials">testimonials</a></li>
            <li><a href="#personal-projects">personal projects</a></li>
        </ul>
    </div>
    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <nav class="navbar ct-navbar--transparent ct-navbar--stickyToTop ct-navbar--withTopbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/me/">
                        <img class="ct-logo-navbar--transparent" src="assets/images/main/content/logo.png" alt="">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="onepage"><a href="#header">start</a></li>
                        <li class="onepage"><a href="#about">about</a></li>
                        <li class="onepage"><a href="#services">services</a></li>
                        <li class="onepage"><a href="#works">work</a></li>
                        <li class="onepage"><a href="#testimonials">testimonials</a></li>
                        <li class="onepage"><a href="#personal-projects">personal projects</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="ct-mediaSection ct-section scroll" id="header" data-stellar-background-ratio="0.3" data-height="100%" data-type="parallax" data-bg-image="assets/images/main/content/header-bg.jpg" data-bg-image-mobile="assets/images/main/content/header-bg.jpg">
            <div class="ct-mediaSection-inner">
                <div class="container">
                    <div class="row">
                        <div class="ct-header-text col-md-12 text-center ct-js-animationDynamic">
                            <h1 class="ct-u-paddingBottom40 ct-js-animation--item ct-motive-text" data-when="span" data-from="0" data-to="0.5" data-opacity="0" data-translatey="-100">
                                mihai tuhari</h1>
                            <h2 class="ct-u-hdr2 ct-js-animation--item" data-when="span" data-from="0" data-to="0.5" data-opacity="0" data-translatey="-100">
                                full stack web developer / fast. reliable. responsive</h2>
                            <div class="ct-divider ct-divider--type6 ct-js-animation--item" data-when="span" data-from="0" data-to="0.5" data-opacity="0" data-translatey="100">
                                <div class="ct-line ct-line--left"></div>
                                <img src="assets/images/main/divider-icon.png" alt="">
                                <div class="ct-line ct-line--right"></div>
                            </div>
                            <a href="#about" class="btn btn-default btn--radius ct-js-btnScroll ct-js-animation--item" data-when="span" data-from="0" data-to="0.5" data-opacity="0" data-translatey="100">See
                                what I can offer</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php

        include('_about.php');
        include('_services.php');
        include('_skills.php');
        include('_works.php');
        include('_testimonials.php');
        include('_personal_projects.php');
        ?>

        <div class="container"></div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 totop "><a id="ct-js-totop" href="#header">Go top <i class="fa fa-angle-up"></i></a></div>
                    <div class="col-sm-2 ct-footer-logo"><img src="assets/images/main/content/logo-footer.png"></div>
                    <div class="col-sm-5 text-right copyright">© <?= date('Y') ?> Mihai Tuhari</div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.pagescroller.lite.js"></script>
<script src="assets/js/device.min.js"></script>
<script src="assets/js/snap.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/twentytwenty/jquery.twentytwenty.js"></script>
<script src="assets/js/twentytwenty/jquery.event.move.js"></script>
<script src="assets/js/twentytwenty/init.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<?php

if (false) {
    ?>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/gmaps/gmap3.min.js"></script>
    <?php

}
?>
<script src="assets/js/ct-mediaSection/jquery.stellar.min.js"></script>
<script src="assets/js/ct-mediaSection/init.js"></script>
<script src="assets/js/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/form/js/contact-form.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
