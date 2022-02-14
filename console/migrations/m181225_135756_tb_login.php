<?php

use yii\db\Migration;

/**
 * Class m181225_135756_tb_login
 */
class m181225_135756_tb_login extends Migration
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

        $this->createTable('{{%login}}', [
            'login_id' => $this->primaryKey(),
            'id_user' => $this->integer(11),
            'id_KAB'=>$this->integer(2),
            'id_KEC'=>$this->integer(2),
         ], $tableOptions);
        
        $this->addForeignKey("fk_login_user", "{{%login}}", "id_user", "{{%user}}", "id", 'CASCADE', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->dropForeignKey('fk_login_user', '{{%login}}');
        $this->dropTable('{{%login}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181225_135756_tb_login cannot be reverted.\n";

        return false;
    }
    */
}
