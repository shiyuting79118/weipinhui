<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/*
*@author shiyuting(shiyuting.79118@163.com)
*功能：此控制器，做登录，找回密码等功能
*date:2017-4-1
*/

class DefaultController extends Controller
{
//    public $layout = false;
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister()
    {
        return $this->render('register');
    }
}
