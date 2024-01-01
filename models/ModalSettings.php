<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modal_settings".
 *
 * @property int $id
 * @property int|null $delay
 * @property int|null $isModalEnabledMaster
 * @property int|null $isModalEnabledOnMobileIOS
 * @property int|null $isModalEnabledOnMobileAndroid
 * @property int|null $isModalEnabledOnDesktop
 */
class ModalSettings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modal_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['delay', 'isModalEnabledMaster', 'isModalEnabledOnMobileIOS', 'isModalEnabledOnMobileAndroid', 'isModalEnabledOnDesktop'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'delay' => 'Delay (in milliseconds)',
            'isModalEnabledMaster' => 'Is Modal Enabled Master',
            'isModalEnabledOnMobileIOS' => 'Is Modal Enabled On Mobile Ios',
            'isModalEnabledOnMobileAndroid' => 'Is Modal Enabled On Mobile Android',
            'isModalEnabledOnDesktop' => 'Is Modal Enabled On Desktop',
        ];
    }
}
