<?php

use yii\helpers\Html;
?>
<header class="navbar navbar-default navbar-fixed-top menu"  id="header">
    <div class="container">
        <div class="hidden-xs">
            <a class="navbar-brand" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index']) ?>"><img src="themes/img/logo.png" alt="logo" /></a>
        </div>
        <!-- <div class="visible-xs img-change">
            <a class="navbar-brand " href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index']) ?>"><img src="themes/img/logoxs.png" alt="logo" /></a>
        </div> -->
        <div>
            <button type="button" class="visible-xs" id="menu-wrapper-mobile">
                <!-- <i class="ion-chevron-right"></i> -->&#9776;
            </button>
        </div>
        <!-- <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <i class="ion-ios-list-outline"></i>
        </button> -->
        <form class=" navbar-left header-search center">
            <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Tìm kiếm ...">
            </div>
        </form>
        <?php if (Yii::$app->user->isGuest): ?>
            <?php //yii\authclient\widgets\AuthChoice::widget(['baseAuthUrl' => ['site/auth']]) ?>
            <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/login']) ?>" class="btn btn-lg pull-right btn-primary mb-3 btn-login-face">
                <i class="fa fa-facebook pull-left"></i>Đăng nhập<span class="hidden-xs"> bằng Facebook</span> 
            </a>
            <?php else: ?>
                <ul class="navbar-nav nav-right nav-tech">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle" src="themes/img/<?= Yii::$app->params['profile']['images']['avatar'] ?>" alt="Avatar" />
                            </div>
                            <div class="pull-left navbar-brand name-header hidden-xs">
                                <span><?= Html::encode(Yii::$app->params['profile']['first_name']." ".Yii::$app->params['profile']['last_name']) ?></span>
                            </div>
                        </a>
                        <div class="dropdown-menu">
                            <div class="bg-white rounded-soft py-2">
                                <a class="dropdown-item font-weight-bold text-warning visible-xs" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/index']);?>"><span class="fas fa-crown mr-1"></span><span><?= Html::encode(Yii::$app->params['profile']['first_name']." ".Yii::$app->params['profile']['last_name']) ?></span></a>
                                <a class="dropdown-item hidden-xs" href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/index']);?>">Profile &amp; account</a>
                                <div class="dropdown-divider visible-xs"></div>
                                <a class="dropdown-item" href="#!">Feedback</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../pages/settings.html">Settings</a>
                                <?= Html::a('<i class="fa fa-sign-out"></i> Log out', ['site/logout'], ['data-method' => 'post', 'class' => 'dropdown-item']) ?>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link px-0" href="#" data-toggle="dropdown"><i class="ion ion-chatboxes icon-header"></i></a></li>
                    <li class="nav-item dropdown"><a class="nav-link px-0" href="#" data-toggle="dropdown"><i class="ion ion-flash icon-header"></i></a></li>
                </ul>
            <?php endif; ?>
        </div><!-- /.container -->
    </header>
