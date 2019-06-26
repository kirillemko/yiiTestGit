<?php

use yii\db\Migration;

/**
 * Class m190514_081015_users_add_role222222
 */
class m190514_081015_users_add_role222222 extends Migration
{
    const ORDERS_TABLE = 'orders';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable(self::ORDERS_TABLE, [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer(),
            'notary_id' => $this->integer(),
            'desc' => $this->text(),
            'status' => $this->tinyInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], 'ENGINE InnoDB');

        $this->createTable(orsers_users, [
            'order_id' => $this->integer(),
            'user_id' => $this->integer(),

        ], 'ENGINE InnoDB');

        $this->addPrimaryKey()

        $this->addForeignKey(
            'orders_users_fk',
            self::ORDERS_TABLE,
            'client_id',
            'users',
            'id'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'orders_users_fk',
            self::ORDERS_TABLE
        );
        $this->dropTable(self::ORDERS_TABLE);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190514_081015_users_add_role222222 cannot be reverted.\n";

        return false;
    }
    */
}
