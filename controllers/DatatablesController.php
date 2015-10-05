<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use conquer\datatables\DataTablesAction;

class DatatablesController extends Controller
{

	public function actions()
	{
		return [
			'datatables' => [
				'class' => DataTablesAction::className(),
				'query' => Model::find(),
			],
		];
	}
	

	public function actionIndex()
	{
		$this->render('index');
	}
	
}
