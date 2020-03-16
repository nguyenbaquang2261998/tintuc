<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="themes/login/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="themes/login/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="themes/login/css/animate.css">

<link rel="stylesheet" type="text/css" href="themes/login/css/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="themes/login/css/select2.min.css">

<link rel="stylesheet" type="text/css" href="themes/login/css/util.css">
<link rel="stylesheet" type="text/css" href="themes/login/css/main.css">
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt>
<img src="themes/login/img/img-01.png" alt="IMG">
</div>
<?= $content ?>
</div>
</div>
</div>

<script src="themes/login/js/jquery-3.2.1.min.js" type="06edaec7869c62e51b2cca8c-text/javascript"></script>

<script src="themes/login/js/popper.js" type="06edaec7869c62e51b2cca8c-text/javascript"></script>
<script src="themes/login/js/bootstrap.min.js" type="06edaec7869c62e51b2cca8c-text/javascript"></script>

<script src="themes/login/js/select2.min.js" type="06edaec7869c62e51b2cca8c-text/javascript"></script>

<script src="themes/login/js/tilt.jquery.min.js" type="06edaec7869c62e51b2cca8c-text/javascript"></script>
<script type="06edaec7869c62e51b2cca8c-text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="06edaec7869c62e51b2cca8c-text/javascript"></script>
<script type="06edaec7869c62e51b2cca8c-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="themes/login/js/main.js" type="06edaec7869c62e51b2cca8c-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="06edaec7869c62e51b2cca8c-|49" defer=""></script>
<?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
