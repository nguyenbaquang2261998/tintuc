<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="themes/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="themes/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Manage
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="themes/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="themes/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="themes/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="<?php echo Url::toRoute('/user/index'); ?>" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="themes/assets/img/logo-small.png">
          </div>
        </a>
        <a href="<?php echo Url::toRoute('/admin/index'); ?>" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="themes/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php if(Yii::$app->controller->id =='feeds'): ?>active<?php endif; ?>">
            <a href="<?php echo Url::toRoute('/feeds/index'); ?>"><i class="nc-icon nc-paper"></i> <span class="nav-label">Feeds</span><span class="fa arrow"></span></a>
          </li>

          <li class="<?php if(Yii::$app->controller->id =='topic'): ?>active<?php endif; ?>">
            <a href="<?php echo Url::toRoute('/topic/index'); ?>"><i class="nc-icon nc-air-baloon"></i> <span class="nav-label">Chủ đề</span><span class="fa arrow"></span></a>
          </li>
          
          <li class="<?php if(Yii::$app->controller->id =='admin'): ?>active<?php endif; ?>">
            <a href="<?php echo Url::toRoute('/admin/index'); ?>"><i class="fa fa-user-secret"></i> <span class="nav-label">Admin Account</span><span class="fa arrow"></span></a>
            <ul class="dropdown">
              <li class="<?php if (Yii::$app->controller->id == 'user-admin' && Yii::$app->controller->action->id == 'index'): ?>active<?php endif; ?>">
                <a href="<?php echo Url::toRoute('/admin/index'); ?>">Danh sách</a>
              </li>
              <li class="<?php if (Yii::$app->controller->id == 'admin' && Yii::$app->controller->action->id == 'changepass'): ?>active<?php endif; ?>"><a href="<?php echo Url::toRoute('/admin/changepass'); ?>">Đổi mật khẩu</a></li>
              <li class="<?php if (Yii::$app->controller->id == 'admin' && Yii::$app->controller->action->id == 'resetpass'): ?>active<?php endif; ?>"><a href="<?php echo Url::toRoute('/admin/resetpass'); ?>">Đặt lại mật khẩu</a></li>
            </ul>
          </li>
          <li class="<?php if(Yii::$app->controller->id =='user'): ?>active<?php endif; ?>">
            <a href="<?php echo Url::toRoute('/user/index'); ?>"><i class="fa fa-user-secret"></i> <span class="nav-label">User Account</span><span class="fa arrow"></span></a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Manage</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <?= Html::a('<i class="nc-icon nc-button-power" style="margin-top:12px;"></i>', ['site/logout'], ['data-method' => 'post']) ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <?= $content ?>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="themes/assets/js/core/jquery.min.js"></script>
  <script src="themes/assets/js/core/popper.min.js"></script>
  <script src="themes/assets/js/core/bootstrap.min.js"></script>
  <script src="themes/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="themes/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="themes/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="themes/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="themes/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
