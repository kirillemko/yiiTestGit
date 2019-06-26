<?php

namespace app\models\generated;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login
 * @property string $pass
 * @property string $name
 * @property int $role
 *
 */
class Users extends \yii\db\ActiveRecord
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
            [['pass', 'name'], 'required'],
            [['role'], 'integer'],
            [['login'], 'string', 'max' => 30],
            [['pass'], 'string', 'max' => 60],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'pass' => 'Pass',
            'name' => 'Name',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['user_id' => 'id'])
            ->viaTable();
    }
}
