<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\widgets\Connect;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'Login');
?>


<div class="row">
    <div class="col-md-4 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Html::encode($this->title) ?>
            </div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username', ['inputOptions' => ['tabindex' => '1']]) ?>
                <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])->passwordInput()->label('密码' . ' (' . Html::a('忘记密码？', ['site/request-password-reset'], ['tabindex' => '5']) . ')') ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton($this->title, ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="panel-footer">
                <?= Html::a(Yii::t('app', 'Sign up'), '/site/signup') ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">Tips</div>
            </br>&nbsp;&nbsp;&nbsp;
            请您保管好您的账户和密码。
            </br>&nbsp;&nbsp;&nbsp;
            Please keep your account and password.
            </br>
        </div>
    </div>

</div>
