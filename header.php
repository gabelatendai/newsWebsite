<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

require 'rb.php';

R::setup('mysql:host=localhost;dbname=newsDb', 'root', ''); //for both mysql or mariaDB
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>News Times a Entertainment Category Flat Bootstrap Responsive Website Template | New & Events :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="News Times Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<style>
    .noselect {
        cursor: default;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
</style>
<body class="noselect">
<!-- banner -->
<div class="banner1">
    <div class="banner-info1">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="index.php"><span>D</span>DREWMAS MEDIA</a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
                        <li><a href="index.php">Home</a></li>
                        <li ><a href="events.php">Current events</a></li>
                        <li><a href="breaking.php">Breaking stories</a></li>
                         <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Categories <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php

                                $sliders = R::findAll('categories');

                                foreach ($sliders as $slider) {
                                $id = $slider->id;
                                ?>
                                <li><a href="news.php<?php echo '?cat=' . $id; ?>"><?php echo   $slider->title;?></a></li>
                               <?php } ?>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
        </div>
    </div>
</div>
