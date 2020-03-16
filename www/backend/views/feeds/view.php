<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Feeds */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Feeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="panel-body">
        <div class="feeds-view">

            <p>
                <?= Html::a('Update', ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => (string)$model->_id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                '_id',
                'source',
                'title',
                'crawler_id',
                'type',
                'user_id',
                'description',
                'url_source',
            // 'category',
                'img_source',
                'created_time',
                'retry_count',
                'status',
                'image',
                ],
            ]) ?>

        </div>
    </div>
</div>
