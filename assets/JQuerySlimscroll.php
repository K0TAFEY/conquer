<?php

namespace conquer\assets;

class JQuerySlimscroll extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/jquery-slimscroll';
	
	public $js = [
			'jquery.slimscroll.min.js',
	];
}