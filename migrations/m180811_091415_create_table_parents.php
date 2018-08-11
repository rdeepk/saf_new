<?php

use yii\db\Migration;

/**
 * Class m180811_091415_create_table_parents
 */
class m180811_091415_create_table_parents extends Migration
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
        $this->createTable('{{%parents}}', [
            'id' => $this->primaryKey(),
            // 'user_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);
        // $this->addForeignKey(
        //     'fk-user_id', 'sponsers', 'user_id', 'user', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180811_091415_create_table_parents cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180811_091415_create_table_parents cannot be reverted.\n";

        return false;
    }
    */
}
