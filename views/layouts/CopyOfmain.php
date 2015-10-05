<?php
use yii\helpers\Html;
use yii\jui\JuiAsset;

use app\assets\AppAsset;

//use conquer\jqueryuniform\JQueryUniformAsset;

use conquer\simplelineicons\SimpleLineIconsAsset;
use conquer\slimscroll\SlimscrollAsset;
use conquer\hoverdropdown\HoverDropdownAsset;
use conquer\fontawesome\FontAwesomeAsset;

/* @var $this \yii\web\View */
/* @var $content string */
JuiAsset::register($this);
FontAwesomeAsset::register($this);
SimpleLineIconsAsset::register($this);
HoverDropdownAsset::register($this);

$this->registerCssFile('//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all');

AppAsset::register($this);
//scripts/index.js$this->registerJsFile('/scripts/index.js', ['depends'=>['app\assets\AppAsset', 'conquer\peity\PeityAsset']]);
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
<?php 
$this->beginContent(dirname(__FILE__).'/body.php');
echo $content; 
$this->endContent();
?>
</html>
<?php $this->endPage() ?>
