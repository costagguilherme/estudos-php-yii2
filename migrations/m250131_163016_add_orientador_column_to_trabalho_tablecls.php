<?php

use yii\db\Migration;

/**
 * Class m250131_163016_add_orientador_column_to_trabalho_tablecls
 */
class m250131_163016_add_orientador_column_to_trabalho_tablecls extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%trabalho}}', 'orientador', $this->string(255)->notNull()->after('autor'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%trabalho}}', 'orientador');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250131_163016_add_orientador_column_to_trabalho_tablecls cannot be reverted.\n";

        return false;
    }
    */
}
