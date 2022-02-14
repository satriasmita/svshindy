<?php

use yii\db\Migration;

/**
 * Class m190116_081719_tb_stat_nik
 */
class m190116_081719_tb_stat_nik extends Migration
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

        $this->createTable('{{%stat_nik}}', [
            'stat_nik_id' => $this->primaryKey(),
            'nama_stat_nik' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stat_nik}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190116_081719_tb_stat_nik cannot be reverted.\n";

        return false;
    }
    */
}
