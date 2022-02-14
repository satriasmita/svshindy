<?php

use yii\db\Migration;

/**
 * Class m181128_023010_tb_nik_surat
 */
class m181128_023010_tb_nik_surat extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {$tableOptions = null;
    if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%nik_surat}}', [
            'nik_surat_id' => $this->primaryKey(), 
            'id_surat'=> $this->integer(11),
            'id_penduduk'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_nik_surat_surat", "{{%nik_surat}}", "id_surat", "{{%surat}}", "surat_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_nik_surat_penduduk", "{{%nik_surat}}", "id_penduduk", "{{%penduduk}}", "penduduk_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_nik_surat_surat', '{{%nik_surat}}');
        $this->dropForeignKey('fk_nik_surat_penduduk', '{{%nik_surat}}');
        $this->dropTable('{{%nik_surat}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_023010_tb_nik_surat cannot be reverted.\n";

        return false;
    }
    */
}
