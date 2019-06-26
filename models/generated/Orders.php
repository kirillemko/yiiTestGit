<?php

namespace app\models\generated;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $client_id
 * @property int $notary_id
 * @property string $desc
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'desc', 'status'], 'required'],
            [['client_id', 'notary_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['desc'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'notary_id' => 'Notary ID',
            'desc' => 'Desc',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
