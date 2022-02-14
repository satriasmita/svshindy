<?php

use yii\db\Migration;

/**
 * Class m181130_095737_tb_jenis_pekerjaan
 */
class m181130_095737_tb_jenis_pekerjaan extends Migration
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

        $this->createTable('{{%jenis_pekerjaan}}', [
            'jp_id' => $this->primaryKey(),
            'nama_jp' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jenis_pekerjaan}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181130_095737_tb_jenis_pekerjaan cannot be reverted.\n";

        return false;
    }
    */
}
