<?php

use yii\db\Migration;

/**
 * Class m181229_035835_tb_hub_kel
 */
class m181229_035835_tb_hub_kel extends Migration
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

        $this->createTable('{{%hub_kel}}', [
            'hub_kel_id' => $this->primaryKey(),
            'nama_hub_kel' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hub_kel}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181229_035835_tb_hub_kel cannot be reverted.\n";

        return false;
    }
    */
}
