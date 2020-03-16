<?php

use yii\helpers\Html;
use common\helpers\Tools;
?>
<div class="col-md-2 hidden-xs hidden-sm static">
    <div class="suggestions" id="sticky-sidebar">
        <h4 class="grey">Danh mục tin</h4>
        <div class="follow-user">
            <img src="themes/img/user-11.jpg" alt="" class="profile-photo-sm pull-left" />
            <div>
                <!-- <h5><a href="timeline.html"><?= Yii::$app->params['category_list']['thethao']['name']?></a></h5> -->
                <h5><?= Html::a(Yii::$app->params['category_list']['thethao']['name'], ['feeds/categoryfeed', 'code' => Yii::$app->params['category_list']['thethao']['code']])?></h5>
                <a href="#" class="text-green">Add friend</a>
            </div>
        </div>
        <div class="follow-user">
            <img src="themes/img/user-12.jpg" alt="" class="profile-photo-sm pull-left" />
            <div>
                <h5><a href="timeline.html"><?= Yii::$app->params['category_list']['congnghe']['name']?></a></h5>
                <a href="#" class="text-green">Add friend</a>
            </div>
        </div>
        <div class="follow-user">
            <img src="themes/img/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
            <div>
                <h5><a href="timeline.html"><?= Yii::$app->params['category_list']['thoisu']['name']?></a></h5>
                <a href="#" class="text-green">Add friend</a>
            </div>
        </div>
        <div class="follow-user">
            <img src="themes/img/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
            <div>
                <h5><a href="timeline.html"><?= Yii::$app->params['category_list']['xe']['name']?></a></h5>
                <a href="#" class="text-green">Add friend</a>
            </div>
        </div>
        <div class="follow-user">
            <img src="themes/img/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
            <div>
                <h5><a href="timeline.html"><?= Yii::$app->params['category_list']['giaitri']['name']?></a></h5>
                <a href="#" class="text-green">Add friend</a>
            </div>
        </div>
        <a href="#">Xem thêm ...</a>
    </div>
</div>