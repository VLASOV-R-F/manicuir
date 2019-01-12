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
    <?= $content?>
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