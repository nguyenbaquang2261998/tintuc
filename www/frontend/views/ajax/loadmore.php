<?php

use yii\helpers\Html;
use common\helpers\Tools;
?>
<?php foreach ($datas as $key => $data): ?>
    <div class="card mb-3 feed-news <?= $data->_id?>">
        <div class="card-header bg-light">
            <div class="row">
                <div class="col">
                    <div class="media">
                        <div class="avatar avatar-2xl status-online">
                            <img class="rounded-circle" src="themes/avatar/<?= isset(Yii::$app->params['domains_list'][$data->source]['avatar']) ? Yii::$app->params['domains_list'][$data->source]['avatar'] : '' ?>" alt="" />
                        </div>
                        <div class="media-body align-self-center ml-2">
                            <p class="feed-username"><a class="font-weight-semi-bold" href="#"><?= Html::encode($data->source) ?></a></p>
                            <p class="feed-time"><?= Html::encode(Tools::convertTime($data->created_time)) ?></p>
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
            <p class="feed-desc"><a href="#"><?= Html::encode(Tools::cutText($data->description, 180, 195)) ?></a></p>
            <a class="text-decoration-none" href="<?= Html::encode($data->url_source) ?>" target="_blank" title="<?= Html::encode($data->title) ?>">
                    <!-- <img class="img-fluid rounded" src="<?= Html::encode("@storages" . $data->image) ?>" alt="Ảnh" /> -->
                <?= Html::img(Yii::$app->params['cdn'] . $data->image, ['class' => 'img-fluid rounded', 'alt' => 'Ảnh',]) ?>
                <small class="text-uppercase text-700"><?= isset(Yii::$app->params['domains_list'][$data->source]['domain']) ? Yii::$app->params['domains_list'][$data->source]['domain'] : Html::encode($data->source) ?></small>
                <h6 class="mb-0"><?= Html::encode($data->title) ?></h6>
                <p class="mb-0 text-700"><?= Html::encode(Tools::cutText($data->description, 180, 195)) ?></p>
            </a>
        </div>
        <div class="card-footer bg-light pt-0">
            <!-- Like Comment Reup  -->
            <div class="row no-gutters font-weight-semi-bold text-center py-2 fs--1">
                <div class="col-auto">
                    <a class="rounded d-flex align-items-center mr-3" href="#!">
                        <i class="ion ion-heart ion-20"></i><span class="ml-1">137</span>
                    </a>
                </div>
                <div class="col-auto"><a class="rounded d-flex align-items-center mr-3 text-700" href="#!"><i class="ion ion-chatbubbles ion-20"></i><span class="ml-1">266</span></a></div>
                <div class="col-auto d-flex align-items-center"><a class="rounded text-700 d-flex align-items-center" href="#!"><i class="ion ion-refresh ion-20"></i><span class="ml-1">94</span></a></div>
            </div>
            <!-- End Like Comment Reup -->
        </div>
    </div>
<?php endforeach; ?>
