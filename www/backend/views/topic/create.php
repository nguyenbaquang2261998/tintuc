<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Topic */

$this->title = 'Create Topic';
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
	</div>
	<div class="panel-body">
		<div class="topic-create">
			<?= $this->render('_form', [
				'model' => $model,
			]) ?>

		</div>
	</div>
</div>
