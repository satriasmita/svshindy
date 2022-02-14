<?php

use yii\db\Migration;

/**
 * Class m181122_010342_tb_kecamatan
 */
class m181122_010342_tb_kecamatan extends Migration
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

        $this->createTable('{{%kecamatan}}', [
            'kecamatan_id' => $this->primaryKey(),
            'nama_kec' => $this->string(255),
            'id_kota'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_kecamatan_kota", "{{%kecamatan}}", "id_kota", "{{%kota}}", "kota_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_kecamatan_kota', '{{%kecamatan}}');
        $this->dropTable('{{%kecamatan}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_010342_tb_kecamatan cannot be reverted.\n";

        return false;
    }
    */
}
