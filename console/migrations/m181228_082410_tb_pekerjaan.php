<?php

use yii\db\Migration;

/**
 * Class m181228_082410_tb_pekerjaan
 */
class m181228_082410_tb_pekerjaan extends Migration
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

        $this->createTable('{{%pekerjaan}}', [
            'pekerjaan_id' => $this->primaryKey(),
            'nama_pekerjaan' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pekerjaan}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181228_082410_tb_pekerjaan cannot be reverted.\n";

        return false;
    }
    */
}
