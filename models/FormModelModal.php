<?php
namespace app\models;

use yii\base\Model;

class FormModelModal extends Model
{
    public $name;
    public $email;
    public $id;

    public function rules()
    {
        return [
            [['email', 'id'], 'required'],
            ['email', 'email'],
            ['id', 'integer'],
            ['name', 'safe'],
        ];
    }
}
