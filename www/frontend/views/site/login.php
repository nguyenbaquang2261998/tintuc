<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng nhập';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Heading -->
<h1 class="display-4 text-center mb-3">
  Đăng Nhập
</h1>
<?php $form = ActiveForm::begin(['id' => 'login-form']);?>
<!-- Email address -->
<div class="form-group">

  <div class="row">
    <div class="col">
      <label>Tài khoản</label>
    </div>
  </div>
  <div class="input-group input-group-merge">
    <!-- <input type="text" class="form-control form-control-appended" placeholder="username"> -->
    <?= $form->field($model, 'username', ['options' => ['tag' => false]])->textInput(['placeholder' => 'Username', 'class' => 'form-control form-control-appended'])->label(FALSE)?>
    <div class="input-group-append">
      <span class="input-group-text">
        <i class="fa fa-user"></i>
      </span>
    </div>
  </div>
</div>
<!-- Password -->
<div class="form-group">
  <div class="row">
    <div class="col">
      <label>Mật khẩu</label>
    </div>
  </div>
  <div class="input-group input-group-merge">
    <!-- <input type="password" class="form-control form-control-appended" placeholder="******"> -->
    <?= Html::activePasswordInput($model, 'password', ['placeholder' => '******', 'class' => 'form-control form-control-appended'])?>
    <div class="input-group-append">
      <span class="input-group-text">
        <i class="fa fa-lock"></i>
      </span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 form-text small text-muted">
    <!-- <input type="checkbox" name="savepass"> Ghi nhớ mật khẩu? -->
    <?= $form->field($model, 'rememberMe', ['options' => ['tag' => false]])->checkbox()->label('Ghi nhớ mật khẩu') ?>
  </div>
  <div class="col-md-6 pull-right">
    <a href="password-reset-illustration.html" class="form-text small text-muted">
      <p class="pull-right">Quên mật khẩu?</p>
    </a>
  </div>
</div>
  <!-- <div class="form-group"> -->
    <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-lg btn-block btn-success mb-3', 'name' => 'login-button']) ?>
  <!-- </div> -->
  <button class="btn btn-lg btn-block btn-primary mb-3">
    <i class="fa fa-facebook pull-left" style="margin-top: 5px;"></i> Đăng nhập bằng Facebook
  </button>
  <button class="btn btn-lg btn-block btn-danger mb-3">
    <i class="fa fa-google-plus pull-left" style="margin-top: 5px;"></i> Đăng nhập bằng Google+
  </button>

  <!-- Link -->
  <div class="text-center">
    <small class="text-muted text-center">
      Bạn chưa có tài khoản? <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['site/signup'])?>">Đăng ký</a>.
    </small>
  </div>            
  <?php ActiveForm::end();?>