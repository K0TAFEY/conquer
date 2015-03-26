<?php

namespace conquer\widgets;


class Menu extends \yii\widgets\Menu
{
	
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
		$icon=isset($item['icon'])?"<i class=\"fa fa-{$item['icon']}\"></i>":"";
		return strtr(parent::renderItem($item), ['{icon}' => $icon]);
	}
}