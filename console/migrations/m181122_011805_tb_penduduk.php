<?php

use yii\db\Migration;

/**
 * Class m181122_011805_tb_penduduk
 */
class m181122_011805_tb_penduduk extends Migration
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

        $this->createTable('{{%penduduk}}', [
        'penduduk_id' => $this->primaryKey(),
        'NIK'=>$this->integer(16),
        'TMPT_SBL'=>$this->string(300),
        'NO_PASPOR'=>$this->string(30),
        'TGL_AKH_PASPOR'=>$this->date(),
        'NAMA_LGKP'=>$this->string(60)->notNull(),
        'JENIS_KLMIN'=>$this->integer(1)->notNull(),
        'TMPT_LHR'=>$this->string(60)->notNull(),
        'TGL_LHR'=>$this->date()->notNull(),
        'AKTA_LHR'=>$this->integer(1),
        'NO_AKTA_LHR'=>$this->string(40),
        'GOL_DRH'=>$this->integer(3)->notNull(),
        'AGAMA'=>$this->string(20)->notNull(),
        'STAT_KWN'=>$this->integer(1)->notNull(),
        'AKTA_KWN'=>$this->integer(1),
        'NO_AKTA_KWN'=>$this->string(40),
        'TGL_KWN'=>$this->date(),
        'AKTA_CRAI'=>$this->integer(1),
        'NO_AKTA_CRAI'=>$this->string(40),
        'TGL_CRAI'=>$this->date(),
        'STAT_HBKEL'=>$this->integer(2),
        'KLAIN_FSK'=>$this->integer(1),
        'PNYDNG_CCT'=>$this->integer(1),
        'PDDK_AKH'=>$this->integer(2),
        'JENIS_PKRJN'=>$this->integer(2),
        'NIK_IBU'=>$this->integer(16),
        'NAMA_LGKP_IBU'=>$this->string(60),
        'NIK_AYAH'=>$this->integer(16),
        'NAMA_LGKP_AYAH'=>$this->string(60),
        'NAMA_KET_RT'=>$this->string(60),
        'NAMA_KET_RW'=>$this->string(60),
        'NAMA_PET_REG'=>$this->string(60),
        'NIP_PET_REG'=>$this->integer(18),
        'NAMA_PET_ENTRI'=>$this->string(60),
        'NIP_PET_ENTRI'=>$this->integer(18),
        'TGL_ENTRI'=>$this->date(),
        'NO_KK'=>$this->integer(11),
        'JENIS_BNTU'=>$this->integer(2),
        'NO_PROP'=>$this->integer(2)->notNull(),
        'NO_KAB'=>$this->integer(2)->notNull(),
        'NO_KEC'=>$this->integer(2)->notNull(),
        'NO_KEL'=>$this->integer(4)->notNull(),
        'STAT_HIDUP'=>$this->integer(10),
        'TGL_UBAH'=>$this->date(),
        'TGL_CETAK_KTP'=>$this->date(),
        'TGL_GANTI_KTP'=>$this->date(),
        'TGL_PJG_KTP'=>$this->date(),
        'STAT_KTP'=>$this->integer(1),
        'ALS_NUMPANG'=>$this->integer(1),
        'PFLAG'=>$this->string(1),
        'CFLAG'=>$this->string(1),
        'SYNC_FLAG'=>$this->integer(1)->defaultValue(0),
        'KET_AGAMA'=>$this->string(60),
        'KEBANGSAAN'=>$this->string(60),
        'GELAR'=>$this->string(5),
        'KET_PKRJN'=>$this->string(60),
        'GLR_AGAMA'=>$this->string(1)->defaultValue('N'),
        'GLR_AKADEMIS'=>$this->string(1)->defaultValue('N'),
        'GLR_BANGSAWAN'=>$this->string(1)->defaultValue('N'),
        'IS_PROS_DATANG'=>$this->string(1),
        'DESC_PEKERJAAN'=>$this->string(30),
        'DESC_KEPERCAYAAN'=>$this->string(30),
        'FLAG_STATUS'=>$this->string(1)->defaultValue(0),
        'COUNT_KTP'=>$this->integer(5)->defaultValue(0),
        'COUNT_BIODATA'=>$this->integer(5)->defaultValue(0),
        'FLAGSINK'=>$this->string(50),
        'CREATED_BY'=>$this->string(20),
        'MODIFIED_BY'=>$this->string(20),
        'FLAG_PINDAH'=>$this->string(1),
        'EKTP_CURRENT_STATUS_CODE'=>$this->string(30),
        'EKTP_CREATED_DATE'=>$this->date(),
        'EKTP_CREATED_BY'=>$this->string(256),
        'EKTP_UPDATED_DATE'=>$this->date(),
        'EKTP_UPDATED_BY'=>$this->string(256),
        'EKTP_UPLOAD_LOCATION'=>$this->integer(10),
        'EKTP_BATCH'=>$this->integer(10)->defaultValue(0),
        'SMS_PHONE'=>$this->string(30),
        'SMS_COUNT'=>$this->integer(4),
        ], $tableOptions);
        $this->addForeignKey("fk_penduduk_kk", "{{%penduduk}}", "NO_KK", "{{%kk}}", "kk_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_penduduk_desa", "{{%penduduk}}", "NO_KEL", "{{%desa}}", "desa_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_penduduk_kecamatan", "{{%penduduk}}", "NO_KEC", "{{%kecamatan}}", "kecamatan_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_penduduk_kota", "{{%penduduk}}", "NO_KAB", "{{%kota}}", "kota_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_penduduk_provinsi", "{{%penduduk}}", "NO_PROP", "{{%provinsi}}", "provinsi_id", 'CASCADE', 'CASCADE');

        }

        /**
        *{@inheritdoc}
        */
        public function safeDown()
            {
        $this->dropForeignKey('fk_penduduk_kk', '{{%penduduk}}');
        $this->dropForeignKey('fk_penduduk_desa', '{{%penduduk}}');
        $this->dropForeignKey('fk_penduduk_kecamatan', '{{%penduduk}}');
        $this->dropForeignKey('fk_penduduk_kota', '{{%penduduk}}');
        $this->dropForeignKey('fk_penduduk_provinsi', '{{%penduduk}}');
        $this->dropTable('{{%penduduk}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_011805_tb_penduduk cannot be reverted.\n";

        return false;
    }
    */
}
