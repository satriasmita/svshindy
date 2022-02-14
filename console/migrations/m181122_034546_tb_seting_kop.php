<?php

use yii\db\Migration;

/**
 * Class m181122_034546_tb_seting_kop
 */
class m181122_034546_tb_seting_kop extends Migration
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

        $this->createTable('{{%setting_kop}}', [
            'kop_id' => $this->primaryKey(),
            'nama_kecamatan' => $this->string(128),
            'nama_desa' => $this->string(128),
            'alamat_' => $this->string(128),
            'kode_pos' => $this->string(128),
            ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%setting_kop}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_034546_tb_seting_kop cannot be reverted.\n";

        return false;
    }
    */
}
