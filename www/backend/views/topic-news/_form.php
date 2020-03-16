<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TopicNews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topic-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_news') ?>

    <?= $form->field($model, 'id_topic') ?>

    <?= $form->field($model, 'order') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
