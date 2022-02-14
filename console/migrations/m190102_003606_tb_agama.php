<?php

use yii\db\Migration;

/**
 * Class m190102_003606_tb_agama
 */
class m190102_003606_tb_agama extends Migration
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

        $this->createTable('{{%agama}}', [
            'agama_id' => $this->primaryKey(),
            'nama_agama' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%agama}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190102_003606_tb_agama cannot be reverted.\n";

        return false;
    }
    */
}
