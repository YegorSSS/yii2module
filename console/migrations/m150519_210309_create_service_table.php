<?php

use yii\db\Schema;
use yii\db\Migration;

class m150519_210309_create_service_table extends Migration
{
    public function safeup()
    {
        $this->createTable('service', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'good_id' => Schema::TYPE_INTEGER,
        ]);

        $this->insert('service', [
            'title' => 'Работа печатника',
            'good_id' => 1
        ]);
    }

    public function safedown()
    {
        $this->delete('service', ['id' => 1]);
        $this->dropTable('service');
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
