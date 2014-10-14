<?php

class DefaultController extends Controller
{
	public $layout='application.modules.register.views.layouts.main';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName			
		);
	}
	public function actionIndex(){
		$this->render('index');
	}
    public function actionWiker(){
    	$model = new Sellers;
        if(isset($_POST['Sellers']))
		{
			$model->attributes=$_POST['Sellers'];
			if($model->validate())
			{
				
				$password='=?UTF-8?B?'.base64_encode($model->password).'?=';
                if($model->save()>0){

					$this->redirect(Yii::app()->homeUrl);
				}else{
					$this->render('wiker',array('model'=>$model));
				}
			}
		}
    	$this->render('wiker',array('model'=>$model));
    }
    public function actionHirer(){
    	$model = new Buyers;
    	$model->gender =array(1);
        if(isset($_POST['Buyers']))
		{
			$model->attributes=$_POST['Buyers'];
			if($model->validate())
			{
				$password='=?UTF-8?B?'.base64_encode($model->password).'?=';
                if($model->save()>0){
					$this->redirect(Yii::app()->homeUrl);
				}else{
					$this->render('hirer',array('model'=>$model));
				}
			}
		}
    	$this->render('hirer',array('model'=>$model));
    }


	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
    
}