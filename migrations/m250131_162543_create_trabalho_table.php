<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trabalho}}`.
 */
class m250131_162543_create_trabalho_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%trabalho}}', [
            'id' => $this->primaryKey(),
            'autor' => $this->string(255)->notNull(),
            'link' => $this->string(512)->notNull(),
            'tipo' => $this->string(50)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%trabalho}}');
    }
}
