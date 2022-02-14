<?php

use yii\db\Migration;

/**
 * Class m181122_010325_tb_provinsi
 */
class m181122_010325_tb_provinsi extends Migration
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

        $this->createTable('{{%provinsi}}', [
            'provinsi_id' => $this->primaryKey(),
            'nama_prov' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%provinsi}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_010325_tb_provinsi cannot be reverted.\n";

        return false;
    }
    */
}
