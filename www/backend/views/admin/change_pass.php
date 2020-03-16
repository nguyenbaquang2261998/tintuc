<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BackendAdminUser */

$this->title = 'Change password';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;  
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="panel-body">
        <div class="backend-admin-user-Changepass">

    <div class="change-password-form">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'oldpass')->passwordInput() ?>

        <?= $form->field($model, 'newpass')->passwordInput() ?>

        <?= $form->field($model, 'renewpass')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
    </div>
</div>