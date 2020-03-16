<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feeds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="panel-body">
        <div class="feeds-index">

            <p class="pull-right">
                <?= Html::a('Create Feeds', ['create'], ['class' => 'btn btn-success']) ?>
            </p>


            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'source',
                    'title',
                // 'crawler_id',
                // 'type',
                //'user_id',
                    'description',
                //'url_source',
                //'category',
                // 'img_source',
                'created_time:datetime',
                //'retry_count',
                // 'status',
                //'image',

                    ['class' => 'yii\grid\ActionColumn',
                    'header'=>'Thao Tác',
                    'headerOptions'=>[
                       'style'=>'width=150px;text-align:center'

                   ],
                   'contentOptions'=>[
                       'style'=>'width=15px;text-align:center;'
                   ],
                   'buttons'=>[
                       'view'=>function($url,$model){
                        return Html::a('View',$url,['class'=>'btn btn-xs btn-primary btn-sm']);
                    },
                    'update'=>function($url,$model){
                        return Html::a('Edit',$url,['class'=>'btn btn-xs btn-success btn-sm',
                            'style'=> 'margin-top:5px;',]);

                    },
                    'delete'=>function($url,$model){
                        return Html::a('Delete',$url,[

                            'class'=>'btn btn-xs btn-danger btn-sm',
                            'style'=> 'margin-top:5px;',
                            'data-confirm'=>'bạn có muốn chắc chắn muốn xóa? ',
                            'data-method'=>'post'
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>


</div>
</div>
</div>
