<?php
namespace backend\modules\calc\controllers;

use yii\web\Controller;

class CalcController extends Controller
{
    // ...
    public function actionIndex()
    {
    	return $this->render('index');
    }
}