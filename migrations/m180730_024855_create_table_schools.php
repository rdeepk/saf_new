<?php

use yii\db\Migration;

/**
 * Class m180730_024855_create_table_schools
 */
class m180730_024855_create_table_schools extends Migration
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
        $this->createTable('{{%schools}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone_no' => $this->string(),
            'address' => $this->string(),
        ], $tableOptions);
        // $this->addForeignKey(
        //     'fk-user_id', 'children', 'user_id', 'user', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180730_024855_create_table_schools cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180730_024855_create_table_schools cannot be reverted.\n";

        return false;
    }
    */
}
