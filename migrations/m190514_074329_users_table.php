<?php

use yii\db\Migration;

/**
 * Class m190514_074329_users_table
 */
class m190514_074329_users_table extends Migration
{

    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string(20)->notNull(),
            'pass' => $this->string()->notNull(),
            'name' => $this->string(30),
            'role' => $this->tinyInteger()->notNull()->defaultValue(1),
        ]);

        $this->insert('users', [
            'login' => 'client@client.com',
            'pass' => Yii::$app->security->generatePasswordHash('client'),
            'name' => 'login1'
        ]);

        $this->insert('users', [
            'login' => 'notary@notary.com',
            'pass' => 'notary',
            'name' => 'login1'
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }

}
