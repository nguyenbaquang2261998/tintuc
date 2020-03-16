<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\tinymce\TinyMce;
use zxbodya\yii2\elfinder\TinyMceElFinder;
use backend\controllers\ElFinderController;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\models\Feeds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feeds-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'source') ?>

    <?=
    $form->field($model, 'title')->widget(
        TinyMce::className(), [
        'settings' => [
            'image_caption' => true,
//                    'menubar' => false,
            'force_br_newlines' => true,
            'force_p_newlines' => false,
            'forced_root_block' => '',
            'toolbar' => 'insertfile undo redo | styleselect | bold italic | fontselect | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor | preview'
        ],
        'fileManager' => [
            'class' => TinyMceElFinder::className(),
            'connectorRoute' => 'el-finder/connector',
        ],
            ]
    )
    ?>

    <?= $form->field($model, 'type')->dropDownList((Yii::$app->params['news']['type']), ['style' => 'width: 200px;']) ?>

    <?=
    $form->field($model, 'description')->widget(
        TinyMce::className(), [
        'settings' => [
            'image_caption' => true,
//                    'menubar' => false,
            'force_br_newlines' => true,
            'force_p_newlines' => false,
            'forced_root_block' => '',
            'toolbar' => 'insertfile undo redo | styleselect | bold italic | fontselect | fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor | preview'
        ],
        'fileManager' => [
            'class' => TinyMceElFinder::className(),
            'connectorRoute' => 'el-finder/connector',
        ],
        'options' => ['rows' => 10]
            ]
    )
    ?>

    <?= $form->field($model, 'url_source') ?>

    <?= $form->field($model, 'category')->dropDownList($datas, ['style' => 'width: 200px;']) ?>

    <?= $form->field($model, 'img_source') ?>

    <?= $form->field($model, 'status') ?>
    <div class="form-group">
        <label for="">Ảnh</label>
    </div>
    <?= $form->field($model, 'image')->FileInput(['multiple'=>true,])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
