<?php

namespace conquer\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class Menu extends \yii\widgets\Menu
{
	public static $cssIcon='fa fa-';
	
	public $linkTemplate = '<a href="{url}">{icon}<span class="title">{label}</span></a>';
	
	public $labelTemplate = '<span class="title">{label}</span>';
	
	
	/**
	 * Renders the content of a menu item.
	 * Note that the container and the sub-menus are not rendered here.
	 * @param array $item the menu item to be rendered. Please refer to [[items]] to see what data might be in the item.
	 * @return string the rendering result
	 */
	protected function renderItem($item)
	{
		if (isset($item['icon'])) {
			$icon='<i class="'.self::$cssIcon.$item['icon'].'"></i>';
		}else
			$icon='';
		if (isset($item['url'])) {
			$template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
	
			return strtr($template, [
					'{url}' => Html::encode(Url::to($item['url'])),
					'{label}' => $item['label'],
					'{icon}' => $icon,
			]);
		} else {
			$template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);
	
			return strtr($template, [
					'{label}' => $item['label'],
			]);
		}
	}
	
}