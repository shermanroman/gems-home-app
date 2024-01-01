<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%modal_settings}}`.
 */
class m240101_201845_create_modal_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%modal_settings}}', [
            'id' => $this->primaryKey(),
            'isModalEnabledMaster' => $this->boolean()->defaultValue(true),
            'isModalEnabledOnMobileIOS' => $this->boolean()->defaultValue(true),
            'isModalEnabledOnMobileAndroid' => $this->boolean()->defaultValue(true),
            'isModalEnabledOnDesktop' => $this->boolean()->defaultValue(true),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%modal_settings}}');
    }
}
