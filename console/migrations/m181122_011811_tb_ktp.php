<?php

use yii\db\Migration;

/**
 * Class m181122_011811_tb_ktp
 */
class m181122_011811_tb_ktp extends Migration
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

        $this->createTable('{{%ktp}}', [
            'ktp_id' => $this->primaryKey(),
            'id_penduduk' => $this->integer(11),
            'tanggal_ktp' => $this->date(),
            'berlaku' => $this->date(),
            'keterangan'=> $this->string(255),
            'foto' => $this->string(128),
            ], $tableOptions);
         $this->addForeignKey("fk_ktp_penduduk", "{{%ktp}}", "id_penduduk", "{{%penduduk}}", "penduduk_id", 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_ktp_penduduk', '{{%ktp}}');
        $this->dropTable('{{%ktp}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_011811_tb_ktp cannot be reverted.\n";

        return false;
    }
    */
}
