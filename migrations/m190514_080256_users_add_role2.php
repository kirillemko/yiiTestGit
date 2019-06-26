<?php

use yii\db\Migration;

/**
 * Class m190514_080256_users_add_role2
 */
class m190514_080256_users_add_role2 extends Migration
{


    public function up()
    {
        $this->addColumn('users','role2', $this->string(20));
    }

    public function down()
    {
        $this->dropColumn('users','role2');
        //return false;
    }
}
