<?php
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class FormModelModal extends ActiveRecord
{

    public static function tableName()
    {
        return 'submission';
    }
    public function rules()
    {
        return [
            [['email', 'id_form'], 'required'],
            ['email', 'email'],
            ['id_form', 'integer'],
            [['name', 'email', 'id_form'], 'string', 'max' => 255], // This rule is for saving in the DB
        ];
    }
}
