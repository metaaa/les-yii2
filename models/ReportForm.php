<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class ReportForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['id', 'reporter', 'weight', 'height', 'soyEater', 'usesRefreshener', 'leavesStripes', 'havingHangover'], 'integer'],
            [['username', 'password', 'authKey', 'accessToken'], 'safe'],
        ];
    }


}
