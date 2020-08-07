<?php

namespace app\models;

use yii\base\Model;

class SimpleForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['name'],'default','value'=>'Vladimir'],
            [['name'], 'string', 'min' => 5, 'max' => 20],
            ['email', 'email'],
        ];
    }
}