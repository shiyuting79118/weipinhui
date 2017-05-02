<?php
namespace app\modules\home\controllers;

/*
*@author shiyuting(shiyuting.79118@163.com)
*功能：首页
*date:2017-5-1
*/

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return  'index';
        var_dump(\Yii::$app->user)
    }

}