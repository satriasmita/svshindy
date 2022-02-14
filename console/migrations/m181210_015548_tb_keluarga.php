<?php

use yii\db\Migration;

/**
 * Class m181210_015548_tb_keluarga
 */
class m181210_015548_tb_keluarga extends Migration
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

        $this->createTable('{{%keluarga}}', [
            'keluarga_id' => $this->primaryKey(), 
            'id_surat'=> $this->integer(11),
            'id_penduduk'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_keluarga_surat", "{{%keluarga}}", "id_surat", "{{%surat}}", "surat_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_keluarga_penduduk", "{{%keluarga}}", "id_penduduk", "{{%penduduk}}", "penduduk_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_keluarga_surat', '{{%keluarga}}');
        $this->dropForeignKey('fk_keluarga_penduduk', '{{%keluarga}}');
        $this->dropTable('{{%keluarga}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181210_015548_tb_keluarga cannot be reverted.\n";

        return false;
    }
    */
}
