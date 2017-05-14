<!DOCTYPE html>
<html>
<head>
        <title>Fast Food</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Fast food delivery!">
        <meta name="keywords" content="">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" href="http://www.themezaa.com/html/h-code/images/favicon.png">
        <link rel="apple-touch-icon" href="http://www.themezaa.com/html/h-code/images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://www.themezaa.com/html/h-code/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="http://www.themezaa.com/html/h-code/images/apple-touch-icon-114x114.png">
        <!-- animation --> 
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/animate.css">
        <!-- bootstrap --> 
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/bootstrap.css">
        <!-- et line icon --> 
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/et-line-icons.css">
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/font-awesome.min.css">
        <!-- revolution slider -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/extralayers.css">
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/settings.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/magnific-popup.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/owl.carousel.css">
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/owl.transitions.css">
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/full-slider.css">
        <!-- text animation -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/text-effect.css">
        <!-- hamburger menu  -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/menu-hamburger.css">
        <!-- common -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/style.css">
        <!-- responsive -->
        <link rel="stylesheet" href="./media/H-Code _ Responsive &amp; Multi-Purpose One_Multi Page Template_files/responsive.css">
        <!--[if IE]>
            <link rel="stylesheet" href="css/style-ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="/media/js/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="./media/css/bootstrap.min.css" type="text/css">
        <!-- Custom Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="./media/font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="./media/css/animate.min.css" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./media/css/style.css" type="text/css">
        <link rel="stylesheet" href="./media/css/style.css" >
        
    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}
    </style>
</head>
    <body>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo html_helpers::url(array('ctl'=>'home')); ?>"><img src="./media/img/logo.png" alt="logolayana"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a class="page-scroll" href="<?php echo html_helpers::url(array('ctl'=>'home')); ?>">Home</a>
                    </li>
                    <li>
                    <a class="page-scroll" href="<?php echo html_helpers::url(array('ctl'=>'menu')); ?>">Menu</a>
                    </li>
                    <!-- <li>
                    <a class="page-scroll" href="">Services</a>
                    </li> -->
                    <li>
                    <a class="page-scroll" href="<?php echo html_helpers::url(array('ctl'=>'profile')); ?>">Your Profile</a>
                    </li>
                    <li>
                    <a class="page-scroll" href="<?php 
                              if(!isset($_SESSION["user"]))
                                {
                                  echo html_helpers::url(array('ctl'=>'login'));}
                              else
                                { 
                                echo html_helpers::url(array('ctl'=>'login','act'=>'signout'));
                                }
                               ?>"><?php 
                                if(!isset($_SESSION["user"])) 
                                  {echo"Login";} 
                                else {echo "Sign Out";}
                              ?>
                    </a>
                    </li>
                    <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        </nav>