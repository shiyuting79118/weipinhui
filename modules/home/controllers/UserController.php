<?php

namespace app\modules\home\controllers;


/*
*@author shiyuting(shiyuting.79118@163.com)
*功能：home 控制器用于封装一些共用方法
*date:2017-4-10
*/

use yii\web\Controller;

class UserController extends Controller
{
    /*登录*/
    public $layout = 'main-login';
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionRegister()
    {
        return $this->render('register');

    }
}