<?php

use yii\db\Schema;
use yii\db\Migration;

class m150519_203629_create_product_table extends Migration
{
    public function safeup()
    {
        $this->createTable('product', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        $this->insert('product', [
            'title' => 'Пакеты',
        ]);
    }

    public function safedown()
    {
        $this->delete('product', ['id' => 1]);
        $this->dropTable('product');
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
