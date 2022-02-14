<?php

use yii\db\Migration;

/**
 * Class m181126_030959_tb_jenis_surat
 */
class m181126_030959_tb_jenis_surat extends Migration
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

        $this->createTable('{{%jenis_surat}}', [
            'jenis_id' => $this->primaryKey(),
            'nama_surat' => $this->string(128),
            ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%jenis_surat}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181126_030959_tb_jenis_surat cannot be reverted.\n";

        return false;
    }
    */
}
