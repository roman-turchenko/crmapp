<?php

use yii\db\Schema;
use yii\db\Migration;

class m160111_131403_init_customer_table extends Migration
{
    public function up()
    {
        $this->createTable('customer', [
            'id' => 'pk',
            'name' => 'string',
            'birth_date' => 'date',
            'notes' => 'text',
            ],
            'ENGINE = InnoDB'
        );
    }

    public function down()
    {
        echo "m160111_131403_init_customer_table cannot be reverted.\n";
        $this->dropTable('customer');
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
