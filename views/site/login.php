<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'login-form'],
        'fieldConfig' => [
            //'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
         //   'template'=>"{label}<div class=\"input-icon\"><i class=\"fa fa-user\"></i>{input}</div>{error}",
            'labelOptions' => ['class' => 'control-label visible-ie8 visible-ie9'],
        	'inputOptions' => ['class' => 'form-control placeholder-no-fix'],
        ],
    ]); ?>

    <h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
    
    <?= $form->field($model, 'username', ['icon'=>'user']) ?>

    <?= $form->field($model, 'password', ['icon'=>'lock'])->passwordInput() ?>

    
    <div class="form-group form-actions">
    	<?= Html::activeCheckbox($model, 'rememberMe',['labelOptions'=>['class'=>'checkbox']]); ?>
    	<?= Html::submitButton('Login', ['class' => 'btn btn-info pull-right', 'name' => 'login-button']) ?>        
    </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>