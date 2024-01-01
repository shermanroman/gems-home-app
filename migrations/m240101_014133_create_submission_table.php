<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%submission}}`.
 */
class m240101_014133_create_submission_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('submission', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'submission_date' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function down()
    {
        $this->dropTable('submission');
    }
}
