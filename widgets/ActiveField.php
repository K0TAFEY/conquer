<?php

namespace conquer\widgets;

use yii\helpers\ArrayHelper;

class ActiveField extends \yii\bootstrap\ActiveField
{
	public static $cssIcon='fa fa-';
	
	public $icon=false;
	
	/**
	 * @inheritdoc
	 */
	public function __construct($config = [])
	{
		$layoutConfig = $this->createLayoutConfig($config);
		$config = ArrayHelper::merge($layoutConfig, $config);
		parent::__construct($config);
	}
	
	/**
	 * @inheritdoc
	 */
	public function render($content = null)
	{
		if($this->icon){
			$this->inputTemplate='<div class="input-icon"><i class="'.self::$cssIcon.$this->icon.'"></i>{input}</div>';
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
						'class' => 'help-block',
				],
				'errorOptions' => [
						'tag' => 'span',
						'class' => 'help-block help-block-error',
				],
				'inputOptions' => [
						'class' => 'form-control',
				],
		];
		return ArrayHelper::merge(parent::createLayoutConfig($instanceConfig),$config);
	}
	
}