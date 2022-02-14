<?php

use yii\db\Migration;

/**
 * Class m181130_095718_tb_pendidikan
 */
class m181130_095718_tb_pendidikan extends Migration
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

        $this->createTable('{{%pendidikan}}', [
            'pendidikan_id' => $this->primaryKey(),
            'nama_pen' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pendidikan}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181130_095718_tb_pendidikan cannot be reverted.\n";

        return false;
    }
    */
}
