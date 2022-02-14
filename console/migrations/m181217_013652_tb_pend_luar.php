<?php

use yii\db\Migration;

/**
 * Class m181217_013652_tb_pend_luar
 */
class m181217_013652_tb_pend_luar extends Migration
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

        $this->createTable('{{%pend_luar}}', [
        'pend_luar_id' => $this->primaryKey(),
        'NIK'=>$this->integer(16),
        'NAMA_LGKP'=>$this->string(60)->notNull(),
        'JENIS_KLMIN'=>$this->integer(1)->notNull(),
        'TMPT_LHR'=>$this->string(60)->notNull(),
        'TGL_LHR'=>$this->date()->notNull(),
        'NO_AKTA_LHR'=>$this->string(40),
        'GOL_DRH'=>$this->integer(3),
        'AGAMA'=>$this->string(20),
        'Alamat'=>$this->string(128),
        'STAT_KWN'=>$this->integer(1),
        'STAT_HBKEL'=>$this->integer(2),
        'PDDK_AKH'=>$this->integer(2),
        'JENIS_PKRJN'=>$this->integer(2),
        'TGL_ENTRI'=>$this->date(),
        'NO_KK'=>$this->integer(11),
        'NO_PROP'=>$this->integer(2),
        'NO_KAB'=>$this->integer(2),
        'NO_KEC'=>$this->integer(2),
        'NO_KEL'=>$this->integer(4),
        'STAT_HIDUP'=>$this->integer(10),
        'KEBANGSAAN'=>$this->string(60),
        
        ], $tableOptions);
        $this->addForeignKey("fk_pend_luar_kk_luar", "{{%pend_luar}}", "NO_KK", "{{%kk_luar}}", "kk_luar_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_pend_luar_desa", "{{%pend_luar}}", "NO_KEL", "{{%desa}}", "desa_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_pend_luar_kecamatan", "{{%pend_luar}}", "NO_KEC", "{{%kecamatan}}", "kecamatan_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_pend_luar_kota", "{{%pend_luar}}", "NO_KAB", "{{%kota}}", "kota_id", 'CASCADE', 'CASCADE');
        $this->addForeignKey("fk_pend_luar_provinsi", "{{%pend_luar}}", "NO_PROP", "{{%provinsi}}", "provinsi_id", 'CASCADE', 'CASCADE');

        }

        /**
        *{@inheritdoc}
        */
        public function safeDown()
            {
        $this->dropForeignKey('fk_pend_luar_kk_luar', '{{%pend_luar}}');
        $this->dropForeignKey('fk_pend_luar_desa', '{{%pend_luar}}');
        $this->dropForeignKey('fk_pend_luar_kecamatan', '{{%pend_luar}}');
        $this->dropForeignKey('fk_pend_luar_kota', '{{%pend_luar}}');
        $this->dropForeignKey('fk_pend_luar_provinsi', '{{%pend_luar}}');
        $this->dropTable('{{%pend_luar}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181217_013652_tb_pend_luar cannot be reverted.\n";

        return false;
    }
    */
}
