<?php

use yii\db\Migration;

/**
 * Class m190109_103517_tb_golda
 */
class m190109_103517_tb_golda extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
    if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%golda}}', [
            'golda_id' => $this->primaryKey(),
            'nama_golda' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%golda}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190109_103517_tb_golda cannot be reverted.\n";

        return false;
    }
    */
}
