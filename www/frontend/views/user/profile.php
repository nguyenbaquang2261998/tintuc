<?php

use yii\helpers\Html;
use common\helpers\Tools;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
?>
<div class="edit-profile-container">
  <div class="block-title">
    <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Thông tin cá nhân</h4>
    <div class="line"></div>
    <p></p>
    <!-- <div class="line"></div> -->
</div>
<div class="edit-block">
    <?php $form = ActiveForm::begin(['id' => 'basic-info', 'class' => 'form-inline']);?>
    <div class="row">
        <div class="form-group col-xs-6">
            <?= $form->field($profile, 'first_name', ['options' => ['tag' => false]])->textInput(['Placeholder' => 'Họ...', 'class' => 'form-control input-group-lg', 'value' => isset($profile->first_name)?Html::encode($profile->first_name):""])->label('Họ') ?>
        </div>
        <div class="form-group col-xs-6">
            <?= $form->field($profile, 'last_name', ['options' => ['tag' => false]])->textInput(['Placeholder' => 'Tên...', 'class' => 'form-control input-group-lg', 'value' => isset($profile->last_name)?Html::encode($profile->last_name):""])->label('Tên') ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-12">
            <?= $form->field($profile, 'email', ['options' => ['tag' => false]])->textInput(['Placeholder' => 'Email...', 'class' => 'form-control input-group-lg', 'value' => isset(Yii::$app->user->identity->email)?Html::encode(Yii::$app->user->identity->email):""])->label('Email') ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-12">
            <?= $form->field($profile, 'phone', ['options' => ['tag' => false]])->textInput(['Placeholder' => 'Số điện thoại...', 'class' => 'form-control input-group-lg', 'value' => isset($profile->phone)?Html::encode($profile->phone):""])->label('Số điện thoại') ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xs-12">
            <label for="datepicker">Start Date</label>
            
        </div>
        
        <!-- <p class="custom-label"><strong>Ngày sinh</strong></p> -->
        <!-- <div class="form-group col-sm-3 col-xs-6">
            <?= $form->field($profile, 'day', ['options' => ['tag' => false]])->dropDownlist([
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10',
                '11' => '11',
                '12' => '12',
                '13' => '13',
                '14' => '14',
                '15' => '15',
                '16' => '16',
                '17' => '17',
                '18' => '18',
                '19' => '19',
                '20' => '20',
                '21' => '21',
                '22' => '22',
                '23' => '23',
                '24' => '24',
                '25' => '25',
                '26' => '26',
                '27' => '27',
                '28' => '28',
                '29' => '29',
                '30' => '30',
                '31' => '31',
            ],['prompt' => 'Ngày...',])->label(false) ?>
        </div>
        <div class="form-group col-sm-3 col-xs-6">
            <?= $form->field($profile, 'month', ['options' => ['tag' => false]])->dropDownlist([
                'Jan' => '1',
                'Feb' => '2',
                'Mar' => '3',
                'Apr' => '4',
                'May' => '5',
                'Jun' => '6',
                'Jul' => '7',
                'Aug' => '8',
                'Sep' => '9',
                'Oct' => '10',
                'Nov' => '11',
                'Dec' => '12',
            ],['prompt' => 'Tháng...',])->label(false) ?>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
            <?= $form->field($profile, 'year', ['options' => ['tag' => false]])->dropDownlist($years,['prompt' => 'Năm...'])->label(false) ?>
        </div> -->
    </div>
    <div class="form-group gender">
        <span class="custom-label"><strong>Giới tính: </strong></span>
        <?= $form->field($profile, 'gender', ['options' => ['tag' => false]])->radioList([1 => 'Nam', 0 => 'Nữ'])->label(false)?>
    </div>
    <div class="row">
        <div class="form-group col-xs-12">
            <?= $form->field($profile, 'story', ['options' => ['tag' => false]])->textarea(['class' => 'form-control', 'rows' => 4])->label(false); ?>
        </div>
    </div>
    <?= Html::submitButton(isset($profile)?'Cập nhật thông tin':'Thêm thông tin', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end();?>
</div>
</div>