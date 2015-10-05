<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/style-conquer.css',
		'css/style.css',
		'css/style-responsive.css',
		'css/plugins.css',
		'css/pages/tasks.css',
		'css/themes/default.css',
		'css/custom.css'
    ];
    public $js = [
    	'scripts/app.js',
    //	'scripts/index.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    	'yii\bootstrap\BootstrapPluginAsset',
    	'yii\jui\JuiAsset',
		'conquer\simplelineicons\SimpleLineIconsAsset',
    	'conquer\slimscroll\SlimscrollAsset',
    	'conquer\hoverdropdown\HoverDropdownAsset',
    	'conquer\fontawesome\FontAwesomeAsset',
    ];
}
