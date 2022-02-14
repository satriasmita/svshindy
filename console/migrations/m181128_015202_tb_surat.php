<?php

use yii\db\Migration;

/**
 * Class m181128_015202_tb_surat
 */
class m181128_015202_tb_surat extends Migration
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

        $this->createTable('{{%surat}}', [
            'surat_id' => $this->primaryKey(),
            'nomor_surat'=> $this->integer(15),
            'nomorst'=> $this->integer(15),
            'nomorpbb'=> $this->integer(128),
            'tanggal'=> $this->date(),
            'tanggal_meninggal'=> $this->date(),
            'jam_meninggal'=> $this->datetime(),
            'gaji' => $this->float(),
            'keterangan' => $this->string(255),
            'tempat_meninggal' => $this->string(255),
            'sebab' => $this->string(255),
            'dikebumikan' => $this->string(128),
            'kegunaan' => $this->string(255),
            'lokasi' => $this->string(255),
            'saksi1' => $this->string(128),
            'saksi2' => $this->string(128),
            'namapembeli' => $this->string(128),
            'namapbb' => $this->string(128),          
            'id_jenis'=> $this->integer(11),
            'id_settingttc'=> $this->integer(11),
            'id_settingttd'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_surat_jenis", "{{%surat}}", "id_jenis", "{{%jenis_surat}}", "jenis_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_surat_settingttc", "{{%surat}}", "id_settingttc", "{{%setting_tandatangan}}", "settingtt_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_surat_settingttd", "{{%surat}}", "id_settingttd", "{{%setting_tandatangan}}", "settingtt_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_surat_jenis', '{{%surat}}');
        $this->dropForeignKey('fk_surat_settingttc', '{{%surat}}');
        $this->dropForeignKey('fk_surat_settingttd', '{{%surat}}');
        $this->dropTable('{{%surat}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_015202_tb_surat cannot be reverted.\n";

        return false;
    }
    */
}
