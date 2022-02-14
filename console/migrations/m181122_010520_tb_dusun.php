<?php

use yii\db\Migration;

/**
 * Class m181122_010520_tb_dusun
 */
class m181122_010520_tb_dusun extends Migration
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

        $this->createTable('{{%dusun}}', [
            'dusun_id' => $this->primaryKey(),
            'nama_dsn' => $this->string(255),
            'id_desa'=> $this->integer(11),
            ], $tableOptions);
        $this->addForeignKey("fk_dusun_desa", "{{%dusun}}", "id_desa", "{{%desa}}", "desa_id", 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_dusun_desa', '{{%dusun}}');
        $this->dropTable('{{%dusun}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_010520_tb_dusun cannot be reverted.\n";

        return false;
    }
    */
}
