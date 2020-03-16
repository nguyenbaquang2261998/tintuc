<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng ký';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Heading -->
<h1 class="display-4 text-center mb-3">
  Đăng Ký
</h1>
<?php $form = ActiveForm::begin(['id' => 'form-signup']);?>
  <!-- Username address -->
  <div class="form-group">

    <div class="row">
      <div class="col">
        <label>Tài khoản</label>
      </div>
    </div>
    <div class="input-group input-group-merge">
      <!-- <input type="password" class="form-control form-control-appended" placeholder="username"> -->
      <?= $form->field($model, 'username', ['options' => ['tag' => false]])->textInput(['placeholder' => 'Username', 'class' => 'form-control form-control-appended'])->label(false)?>
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="fa fa-user"></i>
        </span>
      </div>
    </div>
  </div>
  <!-- Email address -->
  <div class="form-group">

    <div class="row">
      <div class="col">
        <label>Email</label>
      </div>
    </div>
    <div class="input-group input-group-merge">
      <!-- <input type="password" class="form-control form-control-appended" placeholder="username"> -->
      <?= $form->field($model, 'email', ['options' => ['tag' => false]])->textInput(['placeholder' => 'Email', 'class' => 'form-control form-control-appended'])->label(false)?>
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="fa fa-envelope"></i>
        </span>
      </div>
    </div>
  </div>
  <!-- Password -->
  <div class="form-group">
    <!-- Label -->
    <label>
      Mật khẩu
    </label>
    <!-- Input group -->
    <div class="input-group input-group-merge">
      <!-- Input -->
      <!-- <input type="password" class="form-control form-control-appended" placeholder="******"> -->
      <?= $form->field($model, 'password', ['options' => ['tag' => false]])->passwordInput(['placeholder' => '******', 'class' => 'form-control form-control-appended'])->label(false)?>
      <!-- Icon -->
      <div class="input-group-append">
        <span class="input-group-text">
          <i class="fa fa-lock"></i>
        </span>
      </div>

    </div>
  </div>
  <!-- Submit -->
  <!-- <button class="btn btn-lg btn-block btn-primary mb-3">
    Đăng ký
  </button> -->
  <?= Html::submitButton('Đăng ký', ['class' => 'btn btn-lg btn-block btn-primary mb-3', 'name' => 'signup-button'])?>
  <!-- Link -->
  <div class="text-center">
    <small class="text-muted text-center">
      Bạn đã có tài khoản? <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/login'])?>">Đăng nhập</a>.
    </small>
  </div>
<?php ActiveForm::end();?>