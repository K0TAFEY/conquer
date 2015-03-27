<?php
/**
 * @link https://github.com/borodulin/conquer
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/conquer/blob/master/LICENSE.md
 */
namespace conquer\assets;

class BootstrapHoverDropdown extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/bootstrap-hover-dropdown';
	
	public $js = [
			'bootstrap-hover-dropdown.min.js',
	];
}