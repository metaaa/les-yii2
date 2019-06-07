<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m190606_141118_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'reporter' => $this->boolean()->notNull(),
            'weight' => $this->integer(),
            'height' => $this->integer(),
            'soyEater' => $this->boolean(),
            'usesRefreshener' => $this->boolean(),
            'leavesStripes' => $this->boolean(),
            'havingHangover' => $this->boolean(),
            'authKey' => $this->string(),
            'accessToken' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
