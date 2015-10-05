<?php
use yii\helpers\Html;
/* @var $this \yii\web\View */

$this->registerCssFile('//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all');
//scripts/index.js$this->registerJsFile('/scripts/index.js', ['depends'=>['app\assets\AppAsset', 'conquer\peity\PeityAsset']]);
app\assets\AppAsset::register($this);
$this->registerJs('App.init();');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<title><?= Html::encode($this->title) ?></title>
	<!-- <title>Conquer | Admin Dashboard Template</title> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<meta name="MobileOptimized" content="320">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="favicon.ico"/>
    <?php $this->head() ?>
</head>
<body>
<?php 
	$this->beginBody();
	echo $content;
	$this->endBody();
?> 
</body>
</html>
<?php $this->endPage() ?>
