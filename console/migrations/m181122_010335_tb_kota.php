<?php

use yii\db\Migration;

/**
 * Class m181122_010335_tb_provinsi
 */
class m181122_010335_tb_kota extends Migration
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

        $this->createTable('{{%kota}}', [
            'kota_id' => $this->primaryKey(),
            'nama_kota' => $this->string(255),
            'id_provinsi'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_kota_provinsi", "{{%kota}}", "id_provinsi", "{{%provinsi}}", "provinsi_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_kota_provinsi', '{{%kota}}');
        $this->dropTable('{{%kota}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_010335_tb_provinsi cannot be reverted.\n";

        return false;
    }
    */
}
