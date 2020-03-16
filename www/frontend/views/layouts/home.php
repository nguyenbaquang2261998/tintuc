<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <title>News Feed | Check what your friends are doing</title>

    <!-- Stylesheets -->
    <!--  ================================================= -->
    <link rel="stylesheet" href="themes/css/bootstrap.min.css" />
    <link rel="stylesheet" href="themes/css/style.css" />
    <link rel="stylesheet" href="themes/css/ionicons.min.css" />
    <link rel="stylesheet" href="themes/css/font-awesome.min.css" />
    <link rel="stylesheet" href="themes/css/emoji.css"/>
    <link rel="stylesheet" href="themes/css/common.css"/>

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="themes/img/fav.png"/>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- Header -->
    <!-- ================================================= -->
    <?= $this->render('header'); ?>
    <!--Header End-->
    <div id="page-contents">
        <div class="container">
            <div class="row">
                <!-- Newsfeed Common Side Bar Left -->
                <!--  ================================================= -->
                <?= $this->render('sidebar') ?>
                <!-- End Sidebar -->
                <div class="col-xs-12 col-sm-8 col-md-7">

                    <!-- Post Create Box -->
                    <!--  ================================================= -->
                    <!-- Post Create Box End-->

                        <!-- <div class="card mb-3 feed-news">
                            <div class="card-header bg-light">
                                <div class="row">
                                    <div class="col">
                                        <div class="media">
                                            <div class="avatar avatar-2xl status-online">
                                                <img class="rounded-circle" src="themes/img/user-11.jpg" alt="" />
                                            </div>
                                            <div class="media-body align-self-center ml-2">
                                                <p class="feed-username"><a class="font-weight-semi-bold" href="#">Emilia Clarke</a></p>
                                                <p class="feed-time">20h Trước</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle p-1 dropdown-caret-none" type="button" id="post-url-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ion ion-more ion-13"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="post-url-action">
                                                <div class="bg-white py-3">
                                                    <a class="dropdown-item" href="#!">View</a>
                                                    <a class="dropdown-item" href="#!">Edit</a>
                                                    <a class="dropdown-item" href="#!">Report</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-warning" href="#!">Archive</a>
                                                    <a class="dropdown-item text-danger" href="#!">Delete </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="feed-desc"><a href="#">Mount Everest, known in Nepali as Sagarmatha and in Tibetan as Chomolungma, is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas. The international border between Nepal and China runs across its summit point.</a></p>
                            </div>
                            <div class="card-footer bg-light pt-0">
                                <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                                    <div class="col-auto">
                                        <a class="rounded d-flex align-items-center mr-3" href="#!">
                                            <i class="ion ion-heart ion-20"></i><span class="ml-1">137</span>
                                        </a>
                                    </div>
                                    <div class="col-auto"><a class="rounded d-flex align-items-center mr-3 text-700" href="#!"><i class="ion ion-chatbubbles ion-20"></i><span class="ml-1">266</span></a></div>
                                    <div class="col-auto d-flex align-items-center"><a class="rounded text-700 d-flex align-items-center" href="#!"><i class="ion ion-refresh ion-20"></i><span class="ml-1">94</span></a></div>
                                </div>
                                <form class="d-flex align-items-center border-top border-200 pt-3">
                                    <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="themes/img/user-2.jpg" alt="" />
                                    </div>
                                    <input class="form-control rounded-capsule ml-2 fs--1" type="text" placeholder="Write a comment..." />
                                </form>
                                <div class="media mt-3">
                                    <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="themes/img/user-6.jpg" alt="" />
                                    </div>
                                    <div class="media-body ml-2 fs--1">
                                        <p class="mb-1 bg-200 rounded-soft p-2"><a class="font-weight-semi-bold" href="../pages/profile.html">Rowan Atkinson</a> She starred as Jane Porter in The <a href="#!">@Legend of Tarzan (2016)</a>, Tanya Vanderpoel in Whiskey Tango Foxtrot (2016) and as DC comics villain Harley Quinn in Suicide Squad (2016), for which she was nominated for a Teen Choice Award, and many other awards.</p>
                                        <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                                            <div class="col-auto">
                                                <a class="rounded d-flex align-items-center mr-3" href="#!">
                                                    <i class="ion ion-heart ion-20"></i><span class="ml-1">137</span>
                                                </a>
                                            </div>
                                            <div class="col-auto"><a class="rounded d-flex align-items-center mr-3 text-700" href="#!"><i class="ion ion-chatbubbles ion-20"></i><span class="ml-1">266</span></a></div>
                                            <div class="col-auto d-flex align-items-center"><a class="rounded text-700 d-flex align-items-center" href="#!"><i class="ion ion-refresh ion-20"></i><span class="ml-1">94</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- 1 post -->
                        <?= $content ?>
                        <!-- end post -->
                    </div>
                    <!-- Newsfeed Category -->
                    <!--  ================================================= -->
                    <?= $this->render('category')?>
                    <!-- End Category -->
                </div>
            </div>
        </div>
        <!--preloader-->
        <div id="spinner-wrapper">
            <div class="spinner"></div>
        </div>
        <!-- Scripts -->
        <!--  ================================================= -->
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