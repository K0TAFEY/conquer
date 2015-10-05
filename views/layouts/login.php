<?php $this->beginContent(dirname(__FILE__).'/common.php');?>
<?php 
use yii\helpers\Html;
/* @var $this \yii\web\View */
$this->registerCssFile('@web/css/pages/login.css');
?>
<div class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<?php Html::a(Html::img('img/logo.png'),'@web');?>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
<?= $content; ?>
</div>
</div>
<?php $this->endContent();?>