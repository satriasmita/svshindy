<?php

use yii\db\Migration;

/**
 * Class m181127_140721_tb_biodata
 */
class m181127_140721_tb_biodata extends Migration
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

        $this->createTable('{{%biodata}}', [
        'biodata_id' => $this->primaryKey(),
        'NIK'=>$this->integer(16),
        'NAMA_LGKP'=>$this->string(60)->notNull(),
        'JENIS_KLMIN'=>$this->integer(1)->notNull(),
        'TMPT_LHR'=>$this->string(60)->notNull(),
        'TGL_LHR'=>$this->date()->notNull(),
        'NO_AKTA_LHR'=>$this->string(40),
        'GOL_DRH'=>$this->integer(3)->notNull(),
        'AGAMA'=>$this->string(20)->notNull(),
        'STAT_KWN'=>$this->integer(1)->notNull(),
        'STAT_HBKEL'=>$this->integer(2),
        'PDDK_AKH'=>$this->integer(2),
        'JENIS_PKRJN'=>$this->integer(2),
        'TGL_ENTRI'=>$this->date(),
        'NO_KK'=>$this->integer(16),
        'Nama_PROP'=>$this->string(128),
        'Nama_KAB'=>$this->string(128),
        'Nama_KEC'=>$this->string(128),
        'Nama_KEL'=>$this->string(128),
        'Nama_DS'=>$this->string(128),
        'KEBANGSAAN'=>$this->string(60),
        ], $tableOptions);
        
        }

        /**
        *{@inheritdoc}
        */
        public function safeDown()
            {
        $this->dropTable('{{%biodata}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181127_140721_tb_biodata cannot be reverted.\n";

        return false;
    }
    */
}
