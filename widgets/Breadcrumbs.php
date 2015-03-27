<?php
/**
 * @link https://github.com/K0TAFEY/conquer
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/K0TAFEY/conquer/blob/master/LICENSE.md
 */
namespace common\widgets;


class Breadcrumbs extends \yii\widgets\Breadcrumbs
{
	
	public $options = ['class' => 'page-breadcrumb'];
	
	/**
	 * @var string the template used to render each inactive item in the breadcrumbs. The token `{link}`
	 * will be replaced with the actual HTML link for each inactive item.
	 */
	public $itemTemplate = "<li>{icon}{link}<i class=\"fa fa-angle-right\"></i></li>\n";
	
	/**
	 * @var string the template used to render each active item in the breadcrumbs. The token `{link}`
	 * will be replaced with the actual HTML link for each active item.
	 */
	public $activeItemTemplate = "<li class=\"active\">{link}</li>\n";
	
	/**
	 * Renders a single breadcrumb item.
	 * @param array $link the link to be rendered. It must contain the "label" element. The "url" element is optional.
	 * @param string $template the template to be used to rendered the link. The token "{link}" will be replaced by the link.
	 * @return string the rendering result
	 * @throws InvalidConfigException if `$link` does not have "label" element.
	 */
	protected function renderItem($link, $template)
	{
		$icon=isset($link['icon'])?"<i class=\"fa fa-{$link['icon']}\"></i>":"";
		return strtr(parent::renderItem($link, $template), ['{icon}'=>$icon]);
	}
}