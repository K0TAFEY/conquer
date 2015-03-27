<?php
/**
 * @link https://github.com/borodulin/conquer
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/conquer/blob/master/LICENSE.md
 */
namespace conquer\assets;

class FontAwesome extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/font-awesome';
	public $css = [
			'css/font-awesome.css',
	];
}