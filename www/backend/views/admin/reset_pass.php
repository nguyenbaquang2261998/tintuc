<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\BackendAdminUser */

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="panel-body">
        <div class="backend-admin-user-Resetpass">

            <div class="reset-password-form">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'userid')->dropDownList(ArrayHelper::map(\backend\models\Admin::find()->all(), '_id', 'username')); ?>

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