<?php

use yii\db\Schema;
use yii\db\Migration;

class m150519_204323_create_good_table extends Migration
{
    public function safeup()
    {
        $this->createTable('good', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'product_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->insert('good', [
            'title' => 'Банан',
            'product_id' => 1,
        ]);
    }

    public function safedown()
    {
        $this->delete('good', ['id' => 1]);
        $this->dropTable('good');
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
