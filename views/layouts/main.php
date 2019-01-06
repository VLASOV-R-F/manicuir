
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300i,400,400i,700%7CMontserrat:400,500,600,700%7CPlayfair+Display:400,700,700i%7COswald:400,700,700i">
  
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="Вы используете устаревший браузер. Для более быстрой и безопасной работы обновите браузер бесплатно прямо сейчас."></a></div>
    <![endif]-->
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
            <div class="rd-navbar-aside-outer rd-navbar-collapse">
              <div class="rd-navbar-aside">
                <div class="header-info">
                  <ul class="list-inline list-inline-md">
                    <li>
                      <div class="unit unit-spacing-xs align-items-center">
                        <div class="unit-left font-weight-bold">Позвонить:</div>
                        <div class="unit-body"><a href="tel:#">+7 (902) 444-21-96</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs align-items-center">
                        <div class="unit-left font-weight-bold">Часы работы: </div>
                        <div class="unit-body"> Пн-Пт: 10:00 до 17:00</div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="social-block">
                  <ul class="list-inline">
                    <li><a class="icon fa fa-vk" href="#"></a></li>
                    <li><a class="icon fa fa-odnoklassniki" href="#"></a></li>
                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                    <li><a class="icon fa-facebook" href="#"></a></li>
                    <!-- <li><a class="icon fa-twitter" href="#"></a></li>
                    <li><a class="icon fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa-vimeo" href="#"></a></li>
                    <li><a class="icon fa-youtube" href="#"></a></li> -->
                    <li><a class="icon fa-pinterest-p" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/logo-158x58.png" alt="" width="158" height="58"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Главная</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-1.html">Салон красоты</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-2.html">Парикмахерская</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-3.html">Массажный салон</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-4.html">Маникюрный салон</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-5.html">Салон татуировки</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="home-6.html">Салон Восковой Депиляции</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="overview.html">О нас</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="our-team.html">Наша команда</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="overview.html">Общее представление</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="testimonials.html">Рекомендации</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Сервис</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="grid-gallery.html">Галирея</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery.html">Сетка Галереи</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="cobbles-gallery.html">Галерея Булыжников</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-gallery.html">Галерея Кладки</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="gallery-without-padding.html">Галерея без отступов</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="blog-classic.html">Блог</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Один Пост</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-without-sidebar.html">Блог Без Боковой Панели</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-classic.html">Блог Классический</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-modern.html">Блог Современный</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Страници</a>
                        <!-- RD Navbar Megamenu-->
                        <ul class="rd-menu rd-navbar-megamenu">
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Страници № 1</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Книгопечатание</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Кнопочный</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Формы</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs-and-accordions.html">Вкладки и аккордеоны</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Индикатор выполнения</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="grid-system.html">Система решетки</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Таблицы</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Страници № 2</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="appointment.html">Назначение</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Конфиденциальность</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">Карьеры</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="faq.html">FAQ</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team-member-profile.html">Профиль Участника Команды</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">Ценообразование</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Сраници № 3</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">строящийся</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="maintenance.html">Поддержка</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="login-register.html">Войти-Зарегистрироваться</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">В Ближайшее Время</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404.html">404</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503.html">503</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Поисковые результаты</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Контакты</a>
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
        <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
      <?= $content; ?>
      
      <footer class="section bg-default section-xs-type-1 footer-minimal">
        <div class="container">
          <div class="row row-30 align-items-lg-center justify-content-lg-between">
            <div class="col-lg-2">
              <div class="footer-brand"><a href="index.html"><img src="images/logo-dark-142x58.png" alt="" width="142" height="58"/></a></div>
            </div>
            <div class="col-lg-10">
              <div class="footer-nav">
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Главная</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="overview.html">О Нас</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Сервис</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="grid-gallery.html">Галерея</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="blog-classic.html">Блог</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Страници</a></li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Контакты</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <section class="bg-gray-100 section-xs text-center">
        <div class="container">
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Все Права Защищены</span><span>&nbsp;</span><a href="privacy-policy.html">Политика Конфиденциальности</a></p>
        </div>
      </section>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    
    <!-- coded by barber-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>