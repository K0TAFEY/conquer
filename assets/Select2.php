<?php

namespace conquer\assets;

class Select2 extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/select2';
	public $css = [
			'select2.css',
	];
	public $js = [
			'select2.min.js',
	];	
}