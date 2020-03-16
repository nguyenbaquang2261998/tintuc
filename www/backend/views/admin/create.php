<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BackendUser */

$this->title = 'Create Admins';
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
	</div>
	<div class="panel-body">
		<div class="backend-user-create">
			<?= $this->render('_form_create.php', [
				'model' => $model,
			]) ?>

		</div>
	</div>
</div>
