<?php

use yii\db\Migration;

/**
 * Class m181127_020312_tb_data_keluarga
 */
class m181127_020312_tb_data_keluarga extends Migration
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

        $this->createTable('{{%data_keluarga}}', [
        'NO_KK' => $this->primaryKey(16),
        'NAMA_KEP' => $this->string(60),
        'ALAMAT' => $this->string(120),
        'NO_RT' => $this->integer(3),
        'NO_RW' => $this->integer(3),
        'DUSUN' => $this->string(60),
        'KODE_POS' => $this->integer(5),
        'TELP' => $this->string(30),
        'ALS_PRMOHON' => $this->integer(1),
        'ALS_NUMPANG' => $this->integer(1),
        'NO_PROP' => $this->integer(2)->notNull(),
        'NO_KAB' => $this->integer(2)->notNull(),
        'NO_KEC' => $this->integer(2)->notNull(),
        'NO_KEL' => $this->integer(4)->notNull(),
        'USERID' => $this->integer(11),
        'TGL_INSERTION' => $this->date(),
        'TGL_UPDATION' => $this->date(),
        'PFLAG' => $this->string(1),
        'CFLAG' => $this->string(1),
        'SYNC_FLAG' => $this->integer(1)->defaultValue(0),
        'OA_NAMA_PERTAMA' => $this->string(60),
        'OA_NAMA_KELUARGA' => $this->string(60),
        'TIPE_KK' => $this->string(1)->defaultValue(1),
        'NIK_KK' => $this->integer(16),
        'COUNT_KK' => $this->integer(5)->defaultValue(0),
        'FLAGSINK' => $this->string(50),
        'TGL_SIAK_PLUS' => $this->date(),
        'SMS_PHONE' => $this->string(30),
        'SMS_COUNT' => $this->integer(4),
        'MODIFIED_BY' => $this->string(20),
        'CREATED_BY' => $this->string(20),
        'NAMA_PET_REG' => $this->string(60),
        'NIP_PET_REG' => $this->integer(18),
        'NAMA_PET_ENTRI' => $this->string(60),
        'NIP_PET_ENTRI' => $this->integer(18),
        'FLAG_PINDAH' => $this->string(1),
    ], $tableOptions);
        $this->addForeignKey("fk_data_keluarga_desa", "{{%data_keluarga}}", "NO_KEL", "{{%desa}}", "desa_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_data_keluarga_kecamatan", "{{%data_keluarga}}", "NO_KEC", "{{%kecamatan}}", "kecamatan_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_data_keluarga_kota", "{{%data_keluarga}}", "NO_KAB", "{{%kota}}", "kota_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_data_keluarga_provinsi", "{{%data_keluarga}}", "NO_PROP", "{{%provinsi}}", "provinsi_id", 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
$this->dropForeignKey('fk_data_keluarga_desa', '{{%data_keluarga}}');
$this->dropForeignKey('fk_data_keluarga_kecamatan', '{{%data_keluarga}}');
$this->dropForeignKey('fk_data_keluarga_kota', '{{%data_keluarga}}');
$this->dropForeignKey('fk_data_keluarga_provinsi', '{{%data_keluarga}}');
$this->dropTable('{{%data_keluarga}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
echo "m181127_020312_tb_data_keluarga cannot be reverted.\n";

return false;
    }
    */
}
