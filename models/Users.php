<?php

namespace app\models;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\IdentityInterface;

/**
 * @inheritdoc
 * @property Tasks[] $tasks
 */
class Users extends \app\models\generated\Users implements IdentityInterface
{

    const ROLE_CLIENT = 1;
    const ROLE_NOTARY = 2;

    public function rules()
    {
        return array_merge(
            parent::rules(),
            [

            ]
        );
    }

    public function getTasks()
    {

    }


    /**
     * @param int|string $id
     * @return null|Users
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param string $token
     * @param null $type
     * @return null|Users
     * @throws InvalidArgumentException
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        if(true){
            throw new InvalidArgumentException();
        }
        return self::findOne(['access_token' => $token]);
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return self::findOne(['authKey' => $authKey]);
    }

    public function toJSON($short=false)
    {
        if($short){
            return [
                'id' => $this->id,
                'login' => $this->login,
            ];
        }

        return [
            'id' => $this->id,
            'login' => $this->login,
            'pass' => $this->pass,
            'name' => $this->name,
            'role' => $this->role,
        ];
    }

}
