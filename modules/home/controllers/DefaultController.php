<?php

namespace app\modules\home\controllers;

use yii\web\Controller;

/*
*@author shiyuting(shiyuting.79118@163.com)
*功能：home 前台页面登录，注册，找回密码功能
*date:2017-4-1
*/

class DefaultController extends Controller
{

    public $layout = 'main';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
