<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\web\Session;
use common\helpers\Tools;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is social network html5 template available in themeforest......" />
  <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
  <meta name="robots" content="index, follow" />
  <title>My Timeline | This is My Coolest Profile</title>

  <!-- Stylesheets ================================================= -->
  <link rel="stylesheet" href="themes/css/bootstrap.min.css" />
  <link rel="stylesheet" href="themes/css/style.css" />
  <link rel="stylesheet" href="themes/css/ionicons.min.css" />
  <link rel="stylesheet" href="themes/css/font-awesome.min.css" />
  
  <link rel="stylesheet" href="themes/css/emoji.css"/>
  <link rel="stylesheet" href="themes/css/common.css"/>
  <link href="themes/css/flatpickr.min.css" rel="stylesheet">

  <!--Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" type="image/png" href="themes/img/fav.png"/>
  <?php $this->registerCsrfMetaTags() ?>
  <?php $this->head() ?>
</head>
<body>
  <?php $this->beginBody() ?>
  <!-- Header ================================================= -->
  <?= $this->render('header'); ?>
  <!--Header End-->
  <div class="container">
    <!-- Timeline ================================================= -->
    <div class="timeline">
      <div class="timeline-cover">
        <!--Timeline Menu for Large Screens-->
        <div class="timeline-nav-bar hidden-sm hidden-xs">
          <div class="row">
            <div class="col-md-3">
              <div class="profile-info">
                <img src="themes/img/user-1.jpg" alt="" class="img-responsive profile-photo" />
                <h3><?= Html::encode(Yii::$app->params['profile']['first_name']." ".Yii::$app->params['profile']['last_name']) ?></h3>
                <p class="text-muted"><?= Html::encode(Yii::$app->params['profile']['story']) ?></p>
              </div>
            </div>
            <div class="col-md-9">
              <ul class="list-inline profile-menu">
                <!-- <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/index'])?>" class="active">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li> -->
                <li><a href="#">1,299 people following her</a></li>
              </ul>
              <ul class="follow-me list-inline">
                <!-- <li>1,299 people following her</li> -->
                <li><button class="btn-primary">Add Friend</button></li>
              </ul>
            </div>
          </div>
        </div><!--Timeline Menu for Large Screens End-->
        <!--Timeline Menu for Small Screens-->
        <div class="navbar-mobile hidden-lg hidden-md">
          <div class="profile-info">
            <img src="themes/img/user-1.jpg" alt="" class="img-responsive profile-photo" />
            <h4>Sarah Cruiz</h4>
            <p class="text-muted">Creative Director</p>
          </div>
          <div class="mobile-menu">
            <!-- <ul class="list-inline">
              <li><a href="timline.html" class="active">Timeline</a></li>
              <li><a href="timeline-about.html">About</a></li>
              <li><a href="timeline-album.html">Album</a></li>
              <li><a href="timeline-friends.html">Friends</a></li>
            </ul> -->
            <ul class="list-inline">
              <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/index'])?>">Bảng tin</a></li>
              <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/profile', ])?>">Thông tin cá nhân</a></li>
              <li><a href="#">My Interests</a></li>
              <li><a href="#">Account Settings</a></li>
              <li></i><a href="#">Change Password</a></li>
            </ul>
            <button class="btn-primary">Add Friend</button>
          </div>
        </div><!--Timeline Menu for Small Screens End-->
      </div>
      <div id="page-contents">
        <div class="row">
          <!-- Side Bar Left -->
          <div class="col-md-3">
            <ul class="edit-menu hidden-xs hidden-sm">
              <li><i class="icon ion-ios-information-outline"></i><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/index'])?>">Bảng tin</a></li>
              <li><i class="icon ion-ios-briefcase-outline"></i><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/profile'])?>">Thông tin cá nhân</a></li>
              <li><i class="icon ion-ios-heart-outline"></i><a href="#">Ảnh đã đăng</a></li>
              <li><i class="icon ion-ios-settings"></i><a href="#">Cài đặt</a></li>
              <li><i class="icon ion-ios-locked-outline"></i><a href="#">Đổi mật khẩu</a></li>
            </ul>
          </div>
          <!-- End Side Bar Left -->

          <!-- All Post -->
          <div class="col-md-7">
            <?= $content?>
          </div>
          <!-- End All Post -->

          <!-- Side Bar Right -->
          <div class="col-md-2 static hidden-xs">
            <div id="sticky-sidebar">
              <h4 class="grey">Sarah's activity</h4>
              <div class="feed-item">
                <div class="live-activity">
                  <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                  <p class="text-muted">5 mins ago</p>
                </div>
              </div>
              <div class="feed-item">
                <div class="live-activity">
                  <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                  <p class="text-muted">an hour ago</p>
                </div>
              </div>
              <div class="feed-item">
                <div class="live-activity">
                  <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                  <p class="text-muted">4 hours ago</p>
                </div>
              </div>
              <div class="feed-item">
                <div class="live-activity">
                  <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                  <p class="text-muted">a day ago</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Side Bar Right -->
        </div>
      </div>
    </div>
  </div>
  <!--preloader-->
  <div id="spinner-wrapper">
    <div class="spinner"></div>
  </div>
  <!-- <div class="flatpickr-calendar animate arrowBottom" tabindex="-1" style="top: 489px; left: 422px; right: auto;"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">September </span><div class="numInputWrapper"><input class="numInput cur-year" type="text" pattern="\d*" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day " aria-label="September 1, 2019" tabindex="-1">1</span><span class="flatpickr-day " aria-label="September 2, 2019" tabindex="-1">2</span><span class="flatpickr-day " aria-label="September 3, 2019" tabindex="-1">3</span><span class="flatpickr-day today" aria-label="September 4, 2019" aria-current="date" tabindex="-1">4</span><span class="flatpickr-day " aria-label="September 5, 2019" tabindex="-1">5</span><span class="flatpickr-day " aria-label="September 6, 2019" tabindex="-1">6</span><span class="flatpickr-day " aria-label="September 7, 2019" tabindex="-1">7</span><span class="flatpickr-day " aria-label="September 8, 2019" tabindex="-1">8</span><span class="flatpickr-day " aria-label="September 9, 2019" tabindex="-1">9</span><span class="flatpickr-day " aria-label="September 10, 2019" tabindex="-1">10</span><span class="flatpickr-day " aria-label="September 11, 2019" tabindex="-1">11</span><span class="flatpickr-day " aria-label="September 12, 2019" tabindex="-1">12</span><span class="flatpickr-day " aria-label="September 13, 2019" tabindex="-1">13</span><span class="flatpickr-day " aria-label="September 14, 2019" tabindex="-1">14</span><span class="flatpickr-day " aria-label="September 15, 2019" tabindex="-1">15</span><span class="flatpickr-day " aria-label="September 16, 2019" tabindex="-1">16</span><span class="flatpickr-day " aria-label="September 17, 2019" tabindex="-1">17</span><span class="flatpickr-day " aria-label="September 18, 2019" tabindex="-1">18</span><span class="flatpickr-day " aria-label="September 19, 2019" tabindex="-1">19</span><span class="flatpickr-day " aria-label="September 20, 2019" tabindex="-1">20</span><span class="flatpickr-day " aria-label="September 21, 2019" tabindex="-1">21</span><span class="flatpickr-day " aria-label="September 22, 2019" tabindex="-1">22</span><span class="flatpickr-day " aria-label="September 23, 2019" tabindex="-1">23</span><span class="flatpickr-day " aria-label="September 24, 2019" tabindex="-1">24</span><span class="flatpickr-day " aria-label="September 25, 2019" tabindex="-1">25</span><span class="flatpickr-day " aria-label="September 26, 2019" tabindex="-1">26</span><span class="flatpickr-day " aria-label="September 27, 2019" tabindex="-1">27</span><span class="flatpickr-day " aria-label="September 28, 2019" tabindex="-1">28</span><span class="flatpickr-day " aria-label="September 29, 2019" tabindex="-1">29</span><span class="flatpickr-day " aria-label="September 30, 2019" tabindex="-1">30</span><span class="flatpickr-day nextMonthDay" aria-label="October 1, 2019" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="October 2, 2019" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="October 3, 2019" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="October 4, 2019" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="October 5, 2019" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="October 6, 2019" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="October 7, 2019" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="October 8, 2019" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="October 9, 2019" tabindex="-1">9</span><span class="flatpickr-day nextMonthDay" aria-label="October 10, 2019" tabindex="-1">10</span><span class="flatpickr-day nextMonthDay" aria-label="October 11, 2019" tabindex="-1">11</span><span class="flatpickr-day nextMonthDay" aria-label="October 12, 2019" tabindex="-1">12</span></div></div></div></div></div> -->
  <!-- Scripts ================================================= -->
  <!-- <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-122907869-1');
      $('.flatpickr-input').on("click",function(){
        $('.flatpickr-input').addClass('active');
        $('.flatpickr-calendar').toggleClass('open');
      });
      
    </script> -->
  <script src="themes/js/flatpickr.min.js"></script>
  <script src="themes/js/jquery-3.1.1.min.js"></script>
  <script src="themes/js/bootstrap.min.js"></script>
  <script src="themes/js/jquery.sticky-kit.min.js"></script>
  <script src="themes/js/jquery.scrollbar.min.js"></script>
  <script src="themes/js/script.js"></script>
  <script src="themes/js/ajax.js"></script>
  
  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
