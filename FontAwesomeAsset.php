<?php

namespace conquer;

class FontAwesomeAsset extends yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @vendor alias used.
	public $sourcePath = '@vendor/fortawesome/font-awesome';
	public $css = [
			'css/font-awesome.css',
	];
}