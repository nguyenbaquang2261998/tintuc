<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TopicNews */

$this->title = 'Create Topic News';
$this->params['breadcrumbs'][] = ['label' => 'Topic News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
