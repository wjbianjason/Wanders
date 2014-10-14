<?php

class DefaultController extends Controller
{
	public $layout='application.modules.search.views.layouts.main';
	public function actionIndex()
	{
		$this->render('index');
	}
}