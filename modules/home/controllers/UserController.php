<?php

namespace app\modules\home\controllers;


/*
*@author shiyuting(shiyuting.79118@163.com)
*功能： 用户登录
*date:2017-4-10
*/

use app\models\Loginuser;
use yii\web\Controller;

class UserController extends Controller
{

    public $enableCsrfValidation = false;
    /*登录*/
    public $layout = 'main-login';

    public function actionLogin()
    {
        //不是ajax时，显示登录界面
        if (!\Yii::$app->request->isAjax) {
            return $this->render('login');
        }
        //接收表单输入


        //接收短信信息并判断短信验证码
        $message = \Yii::$app->request->post('message');

        //接收登录信息并判断
        $username = \Yii::$app->request->post('username');
        $password = \Yii::$app->request->post('password');

        if (Loginuser::login($username, $password)) {
            $returnData = ['status' => 1, 'info' => \yii\helpers\Url::toRoute('index/index')];
        } else {
            $returnData = ['status' => 0, 'info' => '登录失败'];
        }
        return json_encode($returnData);
    }

    public function actionRegister()
    {
        //不是ajax时，显示注册界面
        if (!\Yii::$app->request->isAjax) {
            return $this->render('register');
        }

        $UserMode = new Loginuser();

        $UserMode->scenario = 'register';

        $UserMode->username = \Yii::$app->request->post('username');
        $UserMode->password = \Yii::$app->request->post('password');
        $UserMode->token = strtoupper(\Yii::$app->params['token_pre'] . md5(uniqid() . time()));
        if ($UserMode->save()) {
            $returnData = ['status' => 1, 'info' => ['token' => $UserMode->token]];
        } else {

            $errors = $UserMode->getFirstErrors();
            $error = current($errors);
            $returnData = ['status' => 0, 'info' => $error];
        }
        return json_encode($returnData);
    }


}