<?php

use yii\helpers\Html;
use frontend\assets\FLAsset;

FLAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?= Html::encode($this->title) ?></title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php $this->head() ?>
  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
    <?php $this->beginBody() ?>

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index'])?>" class="btn btn-warning"><i class="fa"></i>Trở về</a>
      <div class="row align-items-center">

        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="../themes/img/illustrations/happiness.svg" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

          <?= $content?>
        </div>
      </div>
    </div>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>