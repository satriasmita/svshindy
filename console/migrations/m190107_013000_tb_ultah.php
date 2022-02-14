<?php

use yii\db\Migration;

/**
 * Class m190107_013000_tb_ultah
 */
class m190107_013000_tb_ultah extends Migration
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

        $this->createTable('{{%ultah}}', [
            'ultah_id' => $this->primaryKey(), 
            'tanggal'=> $this->date(),
            'id_penduduk'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_ultah_penduduk", "{{%ultah}}", "id_penduduk", "{{%penduduk}}", "penduduk_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_ultah_penduduk', '{{%ultah}}');
        $this->dropTable('{{%ultah}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190107_013000_tb_ultah cannot be reverted.\n";

        return false;
    }
    */
}
