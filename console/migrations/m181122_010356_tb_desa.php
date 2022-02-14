<?php

use yii\db\Migration;

/**
 * Class m181122_010356_tb_desa
 */
class m181122_010356_tb_desa extends Migration
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

        $this->createTable('{{%desa}}', [
            'desa_id' => $this->primaryKey(),
            'nama_desa' => $this->string(255),
            'id_kecamatan'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_desa_kecamatan", "{{%desa}}", "id_kecamatan", "{{%kecamatan}}", "kecamatan_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_desa_kecamatan', '{{%desa}}');
        $this->dropTable('{{%desa}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_010356_tb_desa cannot be reverted.\n";

        return false;
    }
    */
}
