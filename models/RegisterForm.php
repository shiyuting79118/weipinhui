<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $repassword;

    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'repassword'], 'required'],
            // password is validated by validatePassword()
            ['password', 'repassword', 'validatePassword']
        ];
    }

}