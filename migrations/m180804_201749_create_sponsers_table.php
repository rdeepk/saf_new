<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sponsers`.
 */
class m180804_201749_create_sponsers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%sponsers}}', [
            'id' => $this->primaryKey(),
            // 'user_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'company' => $this->string(),
            'phone_no' => $this->string(),
            'email' => $this->string(),
            'address' => $this->string(),
            'city' => $this->string(),
            'postal_code' => $this->string(),
            'province' => $this->string(),
            'country' => $this->string(),
            'notes' => $this->text(),
        ], $tableOptions);
        // $this->addForeignKey(
        //     'fk-user_id', 'sponsers', 'user_id', 'user', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('sponsers');
    }
}
