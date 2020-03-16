<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Feeds */

$this->title = 'Update Feeds: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Feeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
	</div>
	<div class="panel-body">
		<div class="feeds-update">

			<?= $this->render('_form', [
				'datas' => $datas,
				'model' => $model,
			]) ?>

		</div>
	</div>
</div>
