<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model backend\models\BackendTopic */

$this->title ='Danh sách tin thuộc chủ đề: '. $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="panel-body">
       <p class="pull-right">
        <?= Html::button('Thêm mới tin vào chủ đề ', ['title' => 'Thêm mới tin vào chủ đề ', 'class' => 'showModalButton btn btn-success', 'data-topic'=>$_id]); ?>
    </p>
    <?php
    yii\bootstrap\Modal::begin([
        'headerOptions' => ['id' => 'modalHeader'],
        'id' => 'modal',
        'size' => 'modal-lg',
    //keeps from closing modal with esc key or by clicking out of the modal.
    // user must click cancel or X to close
        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
    ]);
    echo "<div id='modalContent'></div>";
    yii\bootstrap\Modal::end();
    ?>


    <?= GridView::widget([
       'dataProvider' => $dataProvider,
        'columns' => [
             ['class' => 'yii\grid\SerialColumn',
                'header' =>'STT',
                'headerOptions' => [
                    'style' => 'width:15px; text-align:center'
                ]
              
            ],
            [
                'header' => 'Tên tin tức',
                'headerOptions' => [
                    'style' =>' text-align:center'
                ],
                'value' => function($data) {
                    return isset($data->feeds)?$data->feeds->title:'';
                }
            ],
            [
              'attribute' => 'order',
              'label' => 'Order',
              'format' => 'raw',
              'headerOptions' => [
                'style' => 'width:15px;text-align:center'
              ],
              'contentOptions' => [
                'style' => 'width:15px;text-align:center'
              ],
              'value' => function($model){
              return Html::textInput('order', $model->order, ['class' => 'savevalue','data-id'=>$model->_id]); 
               }
              
            ],
            ['class' => 'yii\grid\ActionColumn',
           'header'=>'Thao tác',
           'headerOptions'=>[
           'style'=>'width=150px;text-align:center'

           ],
           'contentOptions'=>[
           'style'=>'width=15px;text-align:center'
           ],
          'template' => '{delete}',
          'buttons' => [
            'delete' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title' => Yii::t('app', 'lead-delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method'  => 'post',
                ]);
            }

          ],
          'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'delete') {
                $url ='/index.php?r=topic-news%2Fdelete&id='.$model->_id;
                return $url;
            }

          }
    ],
]
]) ?>
    </div>
</div>
