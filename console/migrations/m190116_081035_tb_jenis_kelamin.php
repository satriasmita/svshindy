<?php

use yii\db\Migration;

/**
 * Class m190116_081035_tb_jenis_kelamin
 */
class m190116_081035_tb_jenis_kelamin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {$tableOptions = null;
    if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%jenis_kelamin}}', [
            'jk_id' => $this->primaryKey(),
            'nama_jk' => $this->string(255),
            ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jenis_kelamin}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190116_081035_tb_jenis_kelamin cannot be reverted.\n";

        return false;
    }
    */
}
