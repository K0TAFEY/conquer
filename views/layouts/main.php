<?php
/* @var $this \yii\web\View */
$this->beginContent(dirname(__FILE__).'/common.php');
$this->beginContent(dirname(__FILE__).'/body.php');
echo $content; 
$this->endContent();
$this->endContent();
