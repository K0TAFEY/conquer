<?php
use yii\helpers\Html;
use conquer\daterangepicker\DaterangepickerWidget;
use yii\bootstrap\ActiveForm;
use yii\jui\Tabs;
use conquer\codemirror\CodemirrorWidget;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <?= $form->field($model, 'range')->widget(DaterangepickerWidget::className()); ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
    
    <?php 
    echo Tabs::widget([
    'items' => [
        [
            'label' => 'General',
            'content' => 'asdads',
            'active' => true
        ],
        [
            'label' => 'Style Setup',
            'content' => '
            <fieldset>
                <legend>Style Setup</legend>
                <div>'.
                $form->field($model, 'styles')->widget(
                    CodemirrorWidget::className(),
                    [
                        'preset'=>'php',
                        'options'=>['rows' => 30],
                    ]
                ).
                '</div>
            </fieldset>
            '
        ],
    ]
            
    ]);
     ?>
</div>
