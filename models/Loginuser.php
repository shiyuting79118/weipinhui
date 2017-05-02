<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "{{%loginuser}}".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $token
 * @property string $gold
 * @property string $money
 * @property string $score
 * @property string $nickname
 * @property integer $sex
 * @property integer $phone
 * @property string $wechat
 * @property integer $qq
 * @property integer $type
 * @property string $email
 * @property string $face_image
 * @property integer $status
 */
class Loginuser extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_YES = 1;//启用
    const STATUS_NO = 0;//禁用
    const STATUS_DEL = -1;//删除

    public static function tableName()
    {
        return '{{%loginuser}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'status'], 'required'],
            [['gold', 'score', 'sex', 'phone', 'qq', 'type', 'status'], 'integer'],
            [['money'], 'number'],
            [['username', 'password', 'token', 'nickname', 'email', 'face_image'], 'string', 'max' => 50],
            [['wechat'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '用户id',
            'username' => '用户登录名',
            'password' => '密码',
            'token' => 'token值',
            'gold' => '金币',
            'money' => '用户余额',
            'score' => '积分',
            'nickname' => '昵称',
            'sex' => '性别：1-男  2-女',
            'phone' => '登录手机号',
            'wechat' => '绑定的微信号',
            'qq' => '登录QQ号',
            'type' => '登录用户类型 ： 1-普通用户  2-管理员 2-供应商',
            'email' => '邮箱',
            'face_image' => '头像',
            'status' => '状态 -1：删除  0：禁用  1：启用',
        ];
    }


    public static function login($username, $password)
    {
        /* @var $user Loginuser */
        $user = self::find()->where('username=:username and status=:status', ['username' => $username, 'status' => self::STATUS_YES])->one();
        if ($user == null) {
            return false;
        }
        //检测密码
        if ($user->password == strtoupper(\Yii::$app->params['password_pre'] . md5($password))) {

            //用user组件放登录的用户信息
            Yii::$app->user->login($user);
            return true;
        }
        return false;

    }

    /*
     *@param   sting  $username
     *@param   sting  $password
     * @retrun
     */
    public static function register($username, $password)
    {

    }

    /**
     * Finds an identity by the given ID.
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface the identity object that matches the given ID.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentity($id)
    {
        return self::findOne(['id' => $id, 'status' => self::STATUS_YES]);
    }

    /**
     * Finds an identity by the given token.
     * @param mixed $token the token to be looked for
     * @param mixed $type the type of the token. The value of this parameter depends on the implementation.
     * For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be `yii\filters\auth\HttpBearerAuth`.
     * @return IdentityInterface the identity object that matches the given token.
     * Null should be returned if such an identity cannot be found
     * or the identity is not in an active state (disabled, deleted, etc.)
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    /**
     * Returns an ID that can uniquely identify a user identity.
     * @return string|int an ID that uniquely identifies a user identity.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns a key that can be used to check the validity of a given identity ID.
     *
     * The key should be unique for each individual user, and should be persistent
     * so that it can be used to check the validity of the user identity.
     *
     * The space of such keys should be big enough to defeat potential identity attacks.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @return string a key that is used to check the validity of a given identity ID.
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    /**
     * Validates the given auth key.
     *
     * This is required if [[User::enableAutoLogin]] is enabled.
     * @param string $authKey the given auth key
     * @return bool whether the given auth key is valid.
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}
