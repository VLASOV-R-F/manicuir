<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\LtAppAsset;

AppAsset::register($this);
LtAppAsset::register($this);
?>

<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  </head>
  <body>
  <?php $this->beginBody() ?>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic rd-navbar-classic-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/logo-dark-3-158x58.png" alt="" width="158" height="58"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-1.html">Beauty Salon</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-2.html">Hair Salon</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-3.html">Massage Salon</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-4.html">Nail Salon</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-5.html">Tattoo Salon</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-6.html">Waxing Salon</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="overview.html">About</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="our-team.html">Our Team</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="overview.html">Overview</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="testimonials.html">Testimonials</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Services</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="grid-gallery.html">Gallery</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery.html">Grid Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="cobbles-gallery.html">Cobbles Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-gallery.html">Masonry Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="gallery-without-padding.html">Gallery without padding</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog-classic.html">Blog</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Single Post</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-without-sidebar.html">Blog Without Sidebar</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-classic.html">Blog Classic</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-modern.html">Blog Modern</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                        <!-- RD Navbar Megamenu-->
                        <ul class="rd-menu rd-navbar-megamenu">
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Pages 1</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs-and-accordions.html">Tabs and accordions</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Grid system</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Pages 2</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="appointment.html">Appointment</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">Careers</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="faq.html">FAQ</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team-member-profile.html">Team Member Profile</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">Pricing</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Pages 3</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="maintenance.html">Maintenance</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="login-register.html">Login-Register</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404.html">404</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503.html">503</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-2 slider-scale-effect" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-bg" style="background-image: url(&quot;images/slide-4-1-1920x780.jpg&quot;)"></div>
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-lg-7 col-xl-6 swiper-caption-inner">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100"><span class="text-primary">Solari</span> Nail Salon <br>Creating Beauty
</h1>
                    <div class="divider-lg" data-caption-animate="fadeInLeft" data-caption-delay="550"></div>
                    <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">Our Nail Salon brings unique and custom nail designs to all customers of LA area. We are a team of nail artists focusing and specializing on complete nail care for women. We are glad to cater you every nail care need.</p><a class="button button-default-outline" href="#" data-caption-animate="fadeInUp" data-caption-delay="450">Book Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-bg" style="background-image: url(&quot;images/slide-4-2-1920x780.jpg&quot;)"></div>
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-lg-7 col-xl-6 swiper-caption-inner">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Be <span class="text-primary">Different</span> with<br>Our Nail Design
</h1>
                    <div class="divider-lg" data-caption-animate="fadeInLeft" data-caption-delay="550"></div>
                    <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">Our qualified team provides a full range of nail design services to satisfy even the most demanding clients. With our help, you can easily acquire a new look for your nails to stand out from the crowd.</p><a class="button button-default-outline" href="#" data-caption-animate="fadeInUp" data-caption-delay="450">Book Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-bg" style="background-image: url(&quot;images/slide-4-3-1920x780.jpg&quot;)"></div>
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-10 col-lg-7 col-xl-6 swiper-caption-inner">
                    <h1 class="heading-decorate" data-caption-animate="fadeInUp" data-caption-delay="100">Better <span class="text-primary">Nail Care</span><br>for Your Pleasure
</h1>
                    <div class="divider-lg" data-caption-animate="fadeInLeft" data-caption-delay="550"></div>
                    <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">We are  dedicated to bringing you the best nail care services combined with expert techniques used in the nail salon industry. We are always trying to be innovative with trends, providing the best level of nail care & design.</p><a class="button button-default-outline" href="#" data-caption-animate="fadeInUp" data-caption-delay="450">Book Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </section>
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 align-items-lg-center justify-content-xl-between">
            <div class="col-lg-6">
              <div class="box-images box-images-modern">
                <div class="box-images-item" data-parallax-scroll="{&quot;y&quot;: -10,   &quot;smoothness&quot;: 30 }"><img src="images/home-4-1-310x370.jpg" alt="" width="310" height="370"/>
                </div>
                <div class="box-images-item box-images-without-border" data-parallax-scroll="{&quot;y&quot;: 40,  &quot;smoothness&quot;: 30 }"><img src="images/home-4-2-328x389.jpg" alt="" width="328" height="389"/>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5">
              <h2 class="heading-decorate">Why Clients <br><span class="divider"></span>Choose Us
</h2>
              <p class="big text-gray-800">Our salon aims to deliver the best nail design experience and top-notch customer service. </p>
              <p>We use all-natural, organic body products, hard-to-find polish brands and colors, iPads at every seat, and a drink menu featuring fresh-pressed juices and hand-crafted coffees.</p><a class="button button-default-outline" href="overview.html">read more</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <h2>Our Services</h2>
          <div class="divider-lg"></div>
          <p>We provide a wide range of services for your nails <br class="d-none d-sm-inline"> to look clean, attractive, and original.
          </p>
        </div>
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-4">
              <div class="box-service-modern">
                <div class="box-icon-classic box-icon-classic-vertical">
                  <div class="icon-classic-aside">
                    <div class="icon-classic">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="59.019px" height="76.726px" viewbox="0 0 59.019 76.726" enable-background="new 0 0 59.019 76.726" xml:space="preserve">
                        <g>
                          <path d="M55.564,35.454h-6.282V18.202c0-0.867-0.426-1.632-1.074-2.085l2.984-14.142    c0.092-0.439-0.099-0.89-0.475-1.119C50.574,0.769,49.228,0,46.489,0c-2.712,0-4.163,0.748-4.319,0.833    c-0.402,0.219-0.612,0.689-0.513,1.146l3.059,14.178c-0.616,0.457-1.018,1.203-1.018,2.044v17.252H37.14    c-1.343,0-2.437,1.128-2.435,2.575l1.998,36.182c0,1.388,1.092,2.516,2.436,2.516h14.282c1.343,0,2.436-1.128,2.434-2.453    L58,37.969C58,36.582,56.908,35.454,55.564,35.454z M45.712,35.454V18.202c0-0.24,0.189-0.435,0.421-0.435    c0.126,0,0.246-0.024,0.357-0.068c0.111,0.044,0.231,0.068,0.357,0.068c0.231,0,0.419,0.195,0.419,0.435v17.252H45.712z    M43.815,2.419c0.565-0.161,1.462-0.338,2.673-0.338c1.181,0,2.026,0.168,2.551,0.321l-2.585,12.252L43.815,2.419z M53.843,74.21    c0,0.24-0.189,0.435-0.421,0.435H39.14c-0.232,0-0.421-0.195-0.423-0.494l-1.998-36.182c0-0.239,0.189-0.434,0.422-0.434h7.564    h3.57h7.29c0.232,0,0.421,0.195,0.423,0.371L53.843,74.21z"></path>
                          <path d="M13.197,42.12c3.976,0,6.296-0.651,7.755-2.176c1.488-1.554,1.924-3.843,2.029-7.176    c0.373,1.422,0.592,2.753,0.592,3.674l0.806,39.541C24.391,76.549,24.84,77,25.386,77c0.008,0,0.015,0,0.022,0    c0.556-0.012,0.998-0.488,0.986-1.063l-0.806-39.519c0-2.171-0.993-6.297-2.604-9.313c-0.016-1.465-0.029-3.059-0.015-4.809    c0.056-6.887-0.707-15.959-4.654-20.07C16.897,0.75,15.175,0,13.197,0C6.895,0,3.425,7.915,3.425,22.288    c0,1.778-0.025,3.4-0.049,4.884c-1.59,3.006-2.57,7.102-2.57,9.225L0,75.937c-0.012,0.575,0.43,1.05,0.986,1.063    c0.007,0,0.014,0,0.022,0c0.546,0,0.995-0.451,1.007-1.019l0.806-39.563c0-0.867,0.203-2.123,0.548-3.478    c0.113,3.217,0.567,5.451,2.02,6.976C6.859,41.461,9.194,42.12,13.197,42.12z M5.388,27.378c0.025-1.54,0.052-3.232,0.052-5.09    c0-6.076,0.756-20.207,7.757-20.207c1.44,0,2.647,0.527,3.687,1.611c2.699,2.81,4.144,9.411,4.07,18.587    c-0.017,2.002,0.003,3.813,0.021,5.446c0.062,5.695,0.099,9.132-1.455,10.756c-1.032,1.078-2.982,1.558-6.323,1.558    c-3.365,0-5.331-0.488-6.372-1.581C5.238,36.792,5.295,33.249,5.388,27.378z"></path>
                          <path d="M14.104,23.904c0.268,0,0.534-0.11,0.733-0.327l4.03-4.411c0.382-0.418,0.364-1.076-0.042-1.471    c-0.404-0.393-1.042-0.375-1.424,0.043l-4.03,4.411c-0.382,0.418-0.364,1.076,0.042,1.471    C13.607,23.81,13.856,23.904,14.104,23.904z"></path>
                          <path d="M17.779,22.276l-4.03,4.411c-0.382,0.418-0.364,1.076,0.042,1.471c0.194,0.189,0.443,0.284,0.691,0.284    c0.268,0,0.534-0.11,0.733-0.327l4.03-4.411c0.382-0.418,0.364-1.076-0.042-1.471C18.798,21.839,18.161,21.858,17.779,22.276z"></path>
                        </g>
                      </svg>
                    </div>
                    <h4 class="icon-classic-title"><a href="services.html">Manicure</a></h4>
                  </div>
                  <div class="icon-classic-body">
                    <p>Our manicure treatments stimulate nail growth and soften dry, dull skin.</p>
                  </div>
                </div>
                <div class="box-service-modern-img"><img src="images/home-4-3-390x312.jpg" alt="" width="390" height="312"/>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box-service-modern box-service-modern-reverse">
                <div class="box-icon-classic box-icon-classic-vertical">
                  <div class="icon-classic-aside">
                    <div class="icon-classic">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="56.222px" height="90.23px" viewbox="0 0 56.222 90.23" enable-background="new 0 0 56.222 90.23" xml:space="preserve">
                        <g>
                          <path d="M1.792,50.845c-1.088,3.859-2.214,7.85-1.635,12.067c0.391,2.852,1.636,5.29,3.506,6.866    c1.712,1.443,3.592,2.191,5.483,2.191c0.274,0,0.549-0.016,0.823-0.047c4.973-0.573,8.72-6.093,9.339-10.878    c0.348-2.678,0.187-5.401,0.031-8.036c-0.201-3.41-0.391-6.631,0.436-9.72c0.929-3.482,2.682-6.488,4.537-9.671    c1.752-3.003,3.562-6.108,4.62-9.65c0.801-2.681,1.129-5.849,0.933-9.006c0.092-0.299,0.065-0.609-0.066-0.888    c-0.433-4.58-2.003-9.037-4.938-11.837c-1.657-1.58-3.704-2.389-5.64-2.214c-1.808,0.165-3.371,1.121-4.791,2.131    C9.299,5.802,2.843,11.621,1.22,18.631c-0.5,2.161-0.435,4.283-0.123,6.368c0.001,0.013,0.004,0.024,0.005,0.037    c0.271,1.79,0.717,3.554,1.164,5.289c0.162,0.626,0.322,1.248,0.472,1.864c1.14,4.703,1.18,9.898,0.114,14.63    C2.553,48.15,2.166,49.521,1.792,50.845z M15.879,4.191c1.134-0.806,2.352-1.567,3.567-1.678c0.1-0.009,0.2-0.014,0.302-0.014    c1.127,0,2.346,0.553,3.387,1.546c2.014,1.921,3.264,4.865,3.862,8.063C21.527,9.165,15.131,8.404,9.151,9.944    C11.285,7.69,13.707,5.735,15.879,4.191z M3.388,22.84c-0.067-1.227-0.01-2.445,0.267-3.645c0.452-1.949,1.347-3.813,2.509-5.557    c6.871-3.12,14.901-2.503,21.211,1.6c0.16,2.824-0.134,5.658-0.838,8.015c-0.131,0.438-0.276,0.868-0.43,1.293    C19.423,19.888,10.684,19.241,3.388,22.84z M5.167,31.602c-0.152-0.629-0.315-1.263-0.48-1.901    c-0.357-1.388-0.716-2.795-0.972-4.202c6.788-3.733,15.169-3.172,21.396,1.426c-0.863,1.837-1.892,3.605-2.959,5.436    c-1.856,3.185-3.777,6.479-4.794,10.285c-0.929,3.478-0.718,7.054-0.514,10.512c0.155,2.635,0.302,5.123-0.015,7.568    c-0.502,3.868-3.493,8.293-7.146,8.714c-0.001,0-0.001,0-0.001,0c-1.487,0.176-2.969-0.357-4.407-1.572    c-1.398-1.176-2.334-3.057-2.642-5.294c-0.508-3.701,0.499-7.271,1.564-11.049c0.383-1.356,0.778-2.759,1.093-4.155    C6.44,42.27,6.396,36.67,5.167,31.602z"></path>
                          <path d="M22.421,88.811c1.294,0.939,2.857,1.419,4.594,1.419c0.63,0,1.282-0.063,1.952-0.189    c2.402-0.455,4.684-1.967,6.427-4.259c2.576-3.39,3.556-7.419,4.505-11.316c0.323-1.337,0.66-2.719,1.053-4.024    c1.398-4.647,3.986-9.152,7.288-12.685c0.433-0.465,0.879-0.929,1.328-1.396c1.243-1.291,2.497-2.608,3.611-4.033    c0.007-0.01,0.015-0.019,0.021-0.027c1.296-1.664,2.396-3.48,3.021-5.609c2.031-6.9-0.734-15.142-3.411-20.841    c-0.741-1.577-1.633-3.179-3.127-4.21c-1.592-1.097-3.78-1.402-5.999-0.842c-3.934,0.997-7.491,4.108-10.118,7.885    c-0.248,0.179-0.424,0.434-0.491,0.738c-1.723,2.653-2.992,5.575-3.612,8.304c-0.819,3.605-0.768,7.2-0.718,10.677    c0.053,3.683,0.103,7.162-0.798,10.651c-0.799,3.096-2.547,5.809-4.398,8.681c-1.429,2.218-2.907,4.511-3.92,7.014    C17.818,79.219,18.37,85.868,22.421,88.811z M44.299,23.222c1.522-0.389,2.966-0.213,3.965,0.477    c1.006,0.693,1.692,1.955,2.283,3.214c1.134,2.413,2.283,5.304,3.035,8.315c-4.453-4.28-10.397-6.759-16.607-6.882    C39.068,25.856,41.602,23.905,44.299,23.222z M31.901,38.279c0.546-2.398,1.681-5.012,3.208-7.393    c7.516-0.471,14.811,2.935,19.26,9.029c0.156,2.09,0.021,4.151-0.545,6.07c-0.347,1.181-0.895,2.271-1.557,3.307    c-4.585-6.719-12.516-10.45-20.626-9.675C31.715,39.171,31.8,38.726,31.901,38.279z M21.945,75.685    c0.926-2.283,2.275-4.379,3.705-6.598c1.877-2.912,3.817-5.924,4.717-9.409c0.985-3.814,0.931-7.626,0.878-11.313    c-0.03-2.118-0.058-4.165,0.094-6.189c7.684-0.941,15.259,2.685,19.337,9.271c-0.914,1.1-1.916,2.147-2.909,3.18    c-0.458,0.477-0.913,0.949-1.354,1.422c-3.559,3.809-6.348,8.664-7.855,13.672c-0.412,1.37-0.756,2.786-1.089,4.154    c-0.928,3.815-1.804,7.42-4.064,10.394c-1.367,1.799-3.107,2.976-4.901,3.314c-1.849,0.352-3.402,0.082-4.612-0.796    C20.913,84.625,20.483,79.301,21.945,75.685z"></path>
                        </g>
                      </svg>
                    </div>
                    <h4 class="icon-classic-title"><a href="services.html">Pedicure</a></h4>
                  </div>
                  <div class="icon-classic-body">
                    <p>Pedicure services provide full restoration of your nails with extra polishing and skin refoliation.</p>
                  </div>
                </div>
                <div class="box-service-modern-img"><img src="images/home-4-4-390x312.jpg" alt="" width="390" height="312"/>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box-service-modern">
                <div class="box-icon-classic box-icon-classic-vertical">
                  <div class="icon-classic-aside">
                    <div class="icon-classic">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="68px" height="79px" viewbox="0 0 68 79" enable-background="new 0 0 68 79" xml:space="preserve">
                        <g>
                          <path d="M7.05,78.563h20.743c3.887,0,7.05-3.165,7.05-7.054V44.496c0-3.89-3.162-7.055-7.05-7.055h-2.677v-0.617    c0.235-0.122,0.443-0.294,0.611-0.51c0.304-0.391,0.438-0.878,0.377-1.369c-0.061-0.493-0.31-0.934-0.701-1.239    c-0.091-0.071-0.187-0.133-0.287-0.185v-0.187c0.622-0.364,1.002-1.075,0.909-1.836c-0.075-0.596-0.425-1.092-0.909-1.375v-0.328    c0.622-0.364,1.002-1.075,0.909-1.836c-0.085-0.681-0.531-1.23-1.125-1.481c-0.399-0.916-1.311-1.55-2.367-1.55H12.309    c-1.425,0-2.584,1.16-2.584,2.585v0.748c-0.621,0.364-1.001,1.074-0.908,1.833c0.061,0.493,0.31,0.934,0.701,1.239    c0.066,0.052,0.135,0.099,0.207,0.14v0.325c-0.621,0.364-1.001,1.075-0.908,1.834c0.061,0.493,0.31,0.933,0.701,1.239    c0.066,0.052,0.136,0.099,0.207,0.14v0.28c-0.169,0.111-0.321,0.25-0.449,0.415c-0.305,0.392-0.439,0.88-0.377,1.372    c0.016,0.125,0.044,0.246,0.083,0.362H7.05c-3.887,0-7.05,3.165-7.05,7.055v27.012C0,75.398,3.163,78.563,7.05,78.563z    M22.925,29.637v1.341c0,0.228,0.074,0.447,0.203,0.63l-11.286,1.395c0.046-0.121,0.074-0.252,0.074-0.388v-1.618L22.925,29.637z    M11.84,37.21c-0.053-0.137-0.133-0.264-0.238-0.371c0.195-0.199,0.314-0.471,0.314-0.769v-0.866l11.009-1.361v0.591    c0,0.289,0.114,0.565,0.315,0.769c-0.165,0.168-0.271,0.391-0.301,0.635L11.84,37.21z M12.309,27.12h10.223    c0.186,0,0.335,0.133,0.375,0.309l-10.991,1.359v-1.275C11.916,27.297,12.093,27.12,12.309,27.12z M2.191,44.496    c0-2.681,2.18-4.863,4.859-4.863h3.771c0.204,0,0.393-0.06,0.557-0.157l11.548-1.428v0.489c0,0.605,0.49,1.096,1.095,1.096h3.772    c2.679,0,4.859,2.182,4.859,4.863v27.012c0,2.681-2.18,4.862-4.859,4.862H7.05c-2.679,0-4.859-2.181-4.859-4.862V44.496z"></path>
                          <path d="M45.358,76.438C45.376,77.854,46.533,79,47.952,79h15.177c1.418,0,2.575-1.145,2.594-2.559l2.275-37.28    C67.999,39.139,68,39.117,68,39.095c0-1.432-1.164-2.596-2.595-2.596h-6.668V18.745c0-0.893-0.453-1.682-1.14-2.15l3.169-14.554    c0.099-0.455-0.105-0.923-0.507-1.159C60.105,0.792,58.674,0,55.762,0c-2.884,0-4.427,0.771-4.593,0.858    c-0.43,0.227-0.654,0.713-0.549,1.188l3.25,14.591c-0.654,0.472-1.081,1.241-1.081,2.108v17.754h-6.961    c-1.431,0-2.596,1.165-2.596,2.596c0,0.02,0.001,0.041,0.002,0.061L45.358,76.438z M54.942,36.498V18.745    c0-0.243,0.198-0.441,0.441-0.441c0.134,0,0.262-0.024,0.38-0.069c0.118,0.045,0.246,0.069,0.38,0.069    c0.243,0,0.44,0.198,0.44,0.441v17.754H54.942z M52.928,2.502c0.601-0.165,1.551-0.346,2.834-0.346c1.25,0,2.145,0.172,2.702,0.329    l-2.739,12.578L52.928,2.502z M45.828,38.654h8.038h3.794h7.745c0.235,0,0.428,0.185,0.44,0.418l-2.274,37.266    c-0.001,0.022-0.002,0.044-0.002,0.066c0,0.243-0.198,0.441-0.441,0.441H47.952c-0.243,0-0.441-0.198-0.441-0.441    c0-0.02-0.001-0.041-0.002-0.061l-2.123-37.269C45.397,38.84,45.591,38.654,45.828,38.654z"></path>
                        </g>
                      </svg>
                    </div>
                    <h4 class="icon-classic-title"><a href="services.html">Art</a></h4>
                  </div>
                  <div class="icon-classic-body">
                    <p>Let our nail artists create a stunning and sustainable nail design for you.</p>
                  </div>
                </div>
                <div class="box-service-modern-img"><img src="images/home-4-5-390x312.jpg" alt="" width="390" height="312"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section parallax-container" data-parallax-img="images/parallax-2-1920x380.jpg">
        <div class="parallax-content section-sm  text-center">
          <div class="container">
            <div class="row row-30 counter-list-border">
              <div class="col-6 col-md-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter-main">
                    <div class="counter heading-1">2580</div>
                  </div>
                  <p class="box-counter-title">happy clients</p>
                </article>
              </div>
              <div class="col-6 col-md-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter-main">
                    <div class="counter heading-1">7</div>
                  </div>
                  <p class="box-counter-title">Awards</p>
                </article>
              </div>
              <div class="col-6 col-md-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter-main">
                    <div class="counter heading-1">11</div>
                  </div>
                  <p class="box-counter-title">offices</p>
                </article>
              </div>
              <div class="col-6 col-md-3">
                <!-- Box counter-->
                <article class="box-counter">
                  <div class="box-counter-main">
                    <div class="counter heading-1">54</div>
                  </div>
                  <p class="box-counter-title">team members</p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-sm-6 col-lg-3 text-center text-lg-left">
              <h2>Our Staff</h2>
              <div class="divider-lg"></div>
              <p>Over the years, we have gathered a trusted, talented, and experienced team of nail technicians and artists.</p>
              <div class="quote-with-image">
                <div class="quote-caption">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="88.34px" height="65.34px" viewBox="0 0 88.34 65.34" enable-background="new 0 0 88.34 65.34" overflow="scroll" xml:space="preserve" preserveAspectRatio="none">
                    <path d="M49.394,65.34v-4.131c12.318-7.088,19.924-16.074,22.811-26.965c-3.125,2.032-5.968,3.051-8.526,3.051																						c-4.265,0-7.864-1.721-10.803-5.168c-2.937-3.444-4.407-7.654-4.407-12.64c0-5.511,1.932-10.142,5.791-13.878																						C58.123,1.873,62.873,0,68.51,0c5.639,0,10.354,2.379,14.143,7.137c3.793,4.757,5.688,10.678,5.688,17.758																						c0,9.977-3.814,18.912-11.443,26.818C69.268,59.613,60.101,64.156,49.394,65.34z M0.923,65.34v-4.131																						c12.321-7.088,19.926-16.074,22.813-26.965c-3.126,2.032-5.993,3.051-8.598,3.051c-4.219,0-7.794-1.721-10.734-5.168																						C1.467,28.683,0,24.473,0,19.487C0,13.976,1.919,9.346,5.757,5.609C9.595,1.873,14.334,0,19.971,0																						c5.685,0,10.41,2.379,14.178,7.137c3.767,4.757,5.652,10.678,5.652,17.758c0,9.977-3.805,18.912-11.409,26.818																						C20.787,59.613,11.632,64.156,0.923,65.34z"></path>
                  </svg>
                  <h3 class="quote-text">Beautiful hands give confidence!</h3>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-9">
              <p class="text-center text-lg-right"><a class="button-link button-link-icon" href="our-team.html">View All Team <span class="icon fa-arrow-right icon-primary"></span></a></p>
              <!-- Owl Carousel-->
              <div class="owl-carousel carousel-inset" data-items="1" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                <div class="team-minimal team-minimal-type-2">
                  <figure><img src="images/team-1-370x370.jpg" alt="" width="370" height="370"></figure>
                  <div class="team-minimal-caption">
                    <h4 class="team-title"><a href="team-member-profile.html">Mary Lucas</a></h4>
                    <p>Founder, Senior Nail Technician</p>
                  </div>
                </div>
                <div class="team-minimal team-minimal-type-2">
                  <figure><img src="images/team-2-370x370.jpg" alt="" width="370" height="370"></figure>
                  <div class="team-minimal-caption">
                    <h4 class="team-title"><a href="team-member-profile.html">Janette Wade</a></h4>
                    <p>Manicurist</p>
                  </div>
                </div>
                <div class="team-minimal team-minimal-type-2">
                  <figure><img src="images/team-3-370x370.jpg" alt="" width="370" height="370"></figure>
                  <div class="team-minimal-caption">
                    <h4 class="team-title"><a href="team-member-profile.html">Ann Smith</a></h4>
                    <p>Pedicurist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-6">
              <div class="box-video" data-lightgallery="group"><img src="images/home-1-9-541x369.jpg" alt="" width="541" height="369"/><a class="button-play" data-lightgallery="item" href="https://www.youtube.com/watch?v=m10Vl9TXpec"></a>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="heading-decorate"><span class="divider"></span>Our Interior</h2>
              <p class="big text-gray-800">We are located in the center of LA and our salon has a minimalistic yet very spacious interior, helping us to cater all your needs.</p>
              <p>Solari Nail Salon was designed by one of the leading Californian studios with an initial idea of creating clean space for our clients to enjoy Solari services.</p>
              <p>The inner space of our salon includes the following:</p>
              <ul class="list-marked">
                <li>Manicure/Pedicure stations</li>
                <li>Treatment rooms</li>
                <li>Waiting area</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-xl bg-default">
        <div class="container">
          <div class="row no-gutters pricing-box-modern justify-content-lg-end">
            <div class="col-sm-6 col-lg-4">
              <div class="pricing-box-inner box-left">
                <h2>Schedule</h2>
                <ul class="list-md pricing-box-inner-list">
                  <li>
                    <h4>Monday-Friday</h4>
                    <p>10am – 8pm</p>
                  </li>
                  <li>
                    <h4>Saturday</h4>
                    <p>10am – 6pm</p>
                  </li>
                  <li>
                    <h4>Sunday</h4>
                    <p>closed</p>
                  </li>
                </ul>
                <p>We will be glad to see you anytime at our salon.</p><a class="button-link button-link-icon" href="appointment.html">make an appointment  <span class="icon fa-arrow-right icon-primary"></span></a>
              </div>
            </div>
            <div class="d-none d-lg-block col-lg-4 img-wrap"><img src="images/home-4-6-498x688.jpg" alt="" width="498" height="688"/>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="pricing-box-inner bg-primary context-dark box-right">
                <h2>Pricing</h2>
                <ul class="list-md pricing-box-inner-list">
                  <li>
                    <h4>Manicure</h4>
                    <p>from $30.00</p>
                  </li>
                  <li>
                    <h4>Pedicure</h4>
                    <p>from $35.00</p>
                  </li>
                  <li>
                    <h4>Nail Extension</h4>
                    <p>from $60.00</p>
                  </li>
                  <li>
                    <h4>Gel Pedicure</h4>
                    <p>from $70.00</p>
                  </li>
                  <li>
                    <h4>Nail Design</h4>
                    <p>from $50.00</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section parallax-container" data-parallax-img="images/parallax-7-1920x1020.jpg">
        <div class="parallax-content section-lg text-center ">
          <div class="container">
            <h2>Testimonials</h2>
            <div class="divider-lg"></div>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
              <div class="quote-corporate quote-corporate-center-img">
                <div class="quote-header">
                  <h4>Jennifer Moreno</h4>
                  <p class="big">Client</p>
                </div>
                <div class="quote-body">
                  <div class="quote-text">
                    <p>Your salon is meticulous and outstanding in the service that it provides. I always leave happy and refreshed after a manicure. The salon is absolutely clean and sanitary. </p>
                  </div>
                  <svg class="quote-body-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                    <g></g>
                    <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                  </svg>
                </div>
                <div class="quote-image"><img src="images/home-1-10-90x90.jpg" alt="" width="90" height="90"/>
                </div>
              </div>
              <div class="quote-corporate quote-corporate-center-img">
                <div class="quote-header">
                  <h4>Mary Matthews</h4>
                  <p class="big">Client</p>
                </div>
                <div class="quote-body">
                  <div class="quote-text">
                    <p>I have been getting my nails done since high school and have been to a lot of different salons. Ann from Solari salon is by far the best nail tech I have been to.</p>
                  </div>
                  <svg class="quote-body-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                    <g></g>
                    <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                  </svg>
                </div>
                <div class="quote-image"><img src="images/home-1-11-90x90.jpg" alt="" width="90" height="90"/>
                </div>
              </div>
              <div class="quote-corporate quote-corporate-center-img">
                <div class="quote-header">
                  <h4>Amanda Smith</h4>
                  <p class="big">Client</p>
                </div>
                <div class="quote-body">
                  <div class="quote-text">
                    <p>I did some search online for a place to get my nails done, and shortly afterward I came across Solari. Since my first visit, I have always left their salon fully satisfied.</p>
                  </div>
                  <svg class="quote-body-mark" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="66px" height="49px" viewbox="0 0 66 49" enable-background="new 0 0 66 49" xml:space="preserve">
                    <g></g>
                    <path d="M36.903,49v-3.098c9.203-5.315,14.885-12.055,17.042-20.222c-2.335,1.524-4.459,2.288-6.37,2.288						c-3.186,0-5.875-1.29-8.071-3.876c-2.194-2.583-3.293-5.74-3.293-9.479c0-4.133,1.443-7.605,4.327-10.407						C43.425,1.405,46.973,0,51.185,0c4.213,0,7.735,1.784,10.566,5.352C64.585,8.919,66,13.359,66,18.669						c0,7.482-2.85,14.183-8.549,20.112C51.751,44.706,44.902,48.112,36.903,49z M0.69,49v-3.098						c9.205-5.315,14.887-12.055,17.044-20.222c-2.335,1.524-4.478,2.288-6.423,2.288c-3.152,0-5.823-1.29-8.02-3.876						C1.096,21.51,0,18.353,0,14.614c0-4.133,1.434-7.605,4.301-10.407C7.168,1.405,10.709,0,14.92,0c4.247,0,7.778,1.784,10.592,5.352						c2.814,3.567,4.223,8.007,4.223,13.317c0,7.482-2.843,14.183-8.524,20.112C15.53,44.706,8.69,48.112,0.69,49z"></path>
                  </svg>
                </div>
                <div class="quote-image"><img src="images/home-1-12-90x90.jpg" alt="" width="90" height="90"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <h2>Portfolio</h2>
          <div class="divider-lg"></div>
          <p class="block-lg">Check out the full portfolio of our works including manicure, pedicure, nail designs, custom artworks, and more. Everything you see here was performed by our skilled manicurists and pedicurists.</p>
          <div class="row row-30">
            <!-- Isotope Filters-->
            <div class="col-lg-12">
              <div class="isotope-filters isotope-filters-horizontal">
                <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                <ul class="isotope-filters-list" id="isotope-filters">
                  <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                  <li><a data-isotope-filter="manicure" data-isotope-group="gallery" href="#">manicure</a></li>
                  <li><a data-isotope-filter="pedicure" data-isotope-group="gallery" href="#">pedicure </a></li>
                  <li><a data-isotope-filter="nailsDesign" data-isotope-group="gallery" href="#">nail Design</a></li>
                </ul>
              </div>
            </div>
            <!-- Isotope Content-->
            <div class="col-lg-12">
              <div class="isotope row" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group" data-column-class=".col-sm-6.col-lg-4">
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="pedicure"><a class="gallery-item" data-lightgallery="item" href="images/gallery-4-1-570x570_original.jpg"><img src="images/gallery-4-1-570x570.jpg" alt="" width="570" height="570"/><span class="gallery-item-title">Image #1</span><span class="gallery-item-button"></span></a>
                </div>
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="manicure"><a class="gallery-item" data-lightgallery="item" href="images/gallery-4-2-570x570_original.jpg"><img src="images/gallery-4-2-570x570.jpg" alt="" width="570" height="570"/><span class="gallery-item-title">Image #2</span><span class="gallery-item-button"></span></a>
                </div>
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="nailsDesign"><a class="gallery-item" data-lightgallery="item" href="images/gallery-4-3-570x570_original.jpg"><img src="images/gallery-4-3-570x570.jpg" alt="" width="570" height="570"/><span class="gallery-item-title">Image #3</span><span class="gallery-item-button"></span></a>
                </div>
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="pedicure"><a class="gallery-item" data-lightgallery="item" href="images/gallery-4-4-570x570_original.jpg"><img src="images/gallery-4-4-570x570.jpg" alt="" width="570" height="570"/><span class="gallery-item-title">Image #4</span><span class="gallery-item-button"></span></a>
                </div>
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="nailsDesign"><a class="gallery-item" data-lightgallery="item" href="images/gallery-4-5-570x570_original.jpg"><img src="images/gallery-4-5-570x570.jpg" alt="" width="570" height="570"/><span class="gallery-item-title">Image #5</span><span class="gallery-item-button"></span></a>
                </div>
                <div class="col-sm-6 col-lg-4 isotope-item" data-filter="nailsDesign"><a class="gallery-item" data-lightgallery="item" href="images/gallery-4-6-570x570_original.jpg"><img src="images/gallery-4-6-570x570.jpg" alt="" width="570" height="570"/><span class="gallery-item-title">Image #6</span><span class="gallery-item-button"></span></a>
                </div>
              </div>
            </div>
          </div><a class="button button-default-outline" href="grid-gallery.html">View all portfolio</a>
        </div>
      </section>
      <section class="section-transform-bottom">
        <div class="container section-md bg-primary context-dark">
          <div class="row justify-content-center row-50">
            <div class="col-sm-10 text-center">
              <h2>Subscribe to Our Newsletter</h2>
              <div class="divider-lg"></div>
            </div>
            <div class="col-sm-10 col-lg-6">
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required"/>
                  <label class="form-label" for="subscribe-form-0-email">Your E-mail</label>
                </div>
                <div class="form-button">
                  <button class="button button-primary" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Google map-->
      <section class="section">
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
          </ul>
        </div>
      </section>
      <footer class="section bg-default section-xs-type-1 footer-minimal">
        <div class="container">
          <div class="row row-30 align-items-lg-center justify-content-lg-between">
            <div class="col-lg-2">
              <div class="footer-brand"><a href="index.html"><img src="images/logo-dark-142x58.png" alt="" width="142" height="58"/></a></div>
            </div>
            <div class="col-lg-10">
              <div class="footer-nav">
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="overview.html">About</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Services</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="grid-gallery.html">Gallery</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="blog-classic.html">Blog</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <section class="bg-gray-100 section-xs text-center">
        <div class="container">
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
        </div>
      </section>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>