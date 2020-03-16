<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Feeds */

$this->title = 'Create Feeds';
$this->params['breadcrumbs'][] = ['label' => 'Feeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
	</div>
	<div class="panel-body">
		<div class="feeds-create">

			<?= $this->render('_form', [
				'datas' => $datas,
				'model' => $model,
			]) ?>

		</div>
	</div>
</div>
