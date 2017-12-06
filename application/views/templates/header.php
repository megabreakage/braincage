<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Braincage</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/plugins.min.css">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/responsive-style.css">

    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/colors/color-1.css" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/custom.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.carousel.min.css">
</head>
<body>

  <!-- Wrapper Start -->
  <div class="wrapper">
      <!-- Header Section Start -->
      <header class="header--section style--1">
          <!-- Header Topbar Start -->
          <div class="header--topbar bg-black">
            <div class="container">
              <!-- Header Topbar Social Start -->
              <ul class="header--topbar-social nav float--left hidden-xs">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
              <!-- Header Topbar Social End -->

              <!-- Header Topbar Links Start -->
              <ul class="header--topbar-links nav ff--primary float--right">
                <li>
                  <a href="<?php echo base_url() ?>auth/login" class="btn-link">
                    <i class="fa mr--8 fa-user-o"></i>
                    <span>My Account</span>
                  </a>
                </li>
              </ul>
                <!-- Header Topbar Links End -->
            </div>
          </div>
          <!-- Header Topbar End -->

          <!-- Header Navbar Start -->
          <div class="header--navbar navbar bg-black" data-trigger="sticky">
            <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Header Navbar Logo Start -->
                  <div class="header--navbar-logo navbar-brand">
                    <a href="<?php echo base_url() ?>">
                      <h1><span><strong>BRAINCAGE</strong></span></h1>
                    </a>
                  </div>
                  <!-- Header Navbar Logo End -->
              </div>

              <div id="headerNav" class="navbar-collapse collapse float--right">
                  <!-- Header Nav Links Start -->
                  <ul class="header--nav-links style--2 nav ff--primary">
                    <li><a href="<?php echo base_url() ?>"><span>Home</span></a></li>
                    <li><a href="<?php echo base_url() ?>about"><span>About us</span></a></li>
                    <li><a href="<?php echo base_url() ?>products/products"><span>Products</span></a></li>
                    <li><a href="<?php echo base_url() ?>membership"><span>Membership</span></a></li>
                    <li><a href="<?php echo base_url() ?>auth/profile"><span>Profile</span></a></li>
                    <li><a href="<?php echo base_url() ?>forums"><span>News</span></a></li>
                    <li><a href="<?php echo base_url() ?>pages/topics"><span>Current Topic</span></a></li>
                  </ul>
                  <!-- Header Nav Links End -->
              </div>
            </div>
          </div>
          <!-- Header Navbar End -->
      </header>
      <!-- Header Section End -->
