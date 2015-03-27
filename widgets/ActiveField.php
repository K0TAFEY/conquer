<?php
/**
 * @link https://github.com/K0TAFEY/conquer
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/K0TAFEY/conquer/blob/master/LICENSE.md
 */
namespace conquer\widgets;

use yii\helpers\ArrayHelper;

class ActiveField extends \yii\bootstrap\ActiveField
{

	public $icon=false;
	
	/**
	 * @inheritdoc
	 */
	public function render($content = null)
	{
		if($this->icon){
			$this->inputTemplate='<div class="input-icon"><i class="fa fa-'.$this->icon.'"></i>{input}</div>';
		}
		return parent::render($content);
	}
	
	public function icon($icon)
	{
		$this->icon=$icon;
		return $this;
	}
	
	/**
	 * @param array $instanceConfig the configuration passed to this instance's constructor
	 * @return array the layout specific default configuration for this instance
	 */
	protected function createLayoutConfig($instanceConfig)
	{
		$config = [
			'hintOptions' => [
				'tag' => 'span',
			],
			'errorOptions' => [
				'tag' => 'span',
			],
		];
		return ArrayHelper::merge(parent::createLayoutConfig($instanceConfig),$config);
	}
	
}