<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class LayoutController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    public function beforeAction($action)
    {
    	$this->view->params['breadcrumbs']=[
    			['url'=>['@web'],'Label'=>'Home', 'icon'=>'home'],
    			'Page layouts',
    	];
    	return parent::beforeAction($action);
    }
    
    public function actionSidebar_fixed()
    {
    	return $this->render('sidebar_fixed');
    }
    
    public function actionSidebar_closed()
    {
    	return $this->render('sidebar_closed');
    }
    
    public function actionBoxed_page()
    {
    	return $this->render('boxed_page');
    }
    
    public function actionSession_timeout()
    {
    	return $this->render('session_timeout');
    }
    
    public function actionIdle_timeout()
    {
    	return $this->render('idle_timeout');
    }
    
    public function actionLanguage_bar()
    {
    	return $this->render('language_bar');
    }
    
    public function actionDisabled_menu()
    {
    	return $this->render('disabled_menu');
    }
    
    public function actionSidebar_reversed()
    {
    	return $this->render('sidebar_reversed');
    }
    
    public function actionBlank_page()
    {
    	return $this->render('blank_page');
    }
    
    public function actionAjax()
    {
    	return $this->render('ajax');
    }
}
