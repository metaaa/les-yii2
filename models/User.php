<?php

namespace app\models;

use app\controllers\SiteController;
use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $reporter
 * @property int $weight
 * @property int $height
 * @property int $soyEater
 * @property int $usesRefreshener
 * @property int $leavesStripes
 * @property int $havingHangover
 * @property string $authKey
 * @property string $accessToken
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'reporter'], 'required'],
            [['reporter', 'weight', 'height', 'soyEater', 'usesRefreshener', 'leavesStripes', 'havingHangover'], 'integer'],
            [['username', 'password', 'authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'reporter' => 'Reporter',
            'weight' => 'Weight',
            'height' => 'Height',
            'soyEater' => 'Soy Eater',
            'usesRefreshener' => 'Uses Refreshener',
            'leavesStripes' => 'Leaves Stripes',
            'havingHangover' => 'Having Hangover',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

}
