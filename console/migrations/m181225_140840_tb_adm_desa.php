<?php

use yii\db\Migration;

/**
 * Class m181225_140840_tb_adm_desa
 */
class m181225_140840_tb_adm_desa extends Migration
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

        $this->createTable('{{%adm_desa}}', [
            'adm_desa_id' => $this->primaryKey(),
            'id_user' => $this->integer(11),
            'id_KAB'=>$this->integer(2),
            'id_KEC'=>$this->integer(2),
            'id_KEL'=>$this->integer(4),
         ], $tableOptions);
        
        $this->addForeignKey("fk_adm_desa_user", "{{%adm_desa}}", "id_user", "{{%user}}", "id", 'CASCADE', 'CASCADE');

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->dropForeignKey('fk_adm_desa_user', '{{%adm_desa}}');
        $this->dropTable('{{%adm_desa}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181225_140840_tb_adm_desa cannot be reverted.\n";

        return false;
    }
    */
}
