<?php

namespace app\models;

use yii\base\Model;

class EmployersSaveForm extends Model
{
    public $first_name;
    public $second_name;
    public $middle_name;
    public $email;

    /**
     * Правила валидации
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            [['first_name', 'second_name', 'middle_name', 'email'], 'required'],
            [['first_name'], 'default', 'value' => 'Vladimir'],
            [['second_name'], 'default', 'value' => 'Eliseev'],
            [['middle_name'], 'default', 'value' => 'Vladimirovich'],
            [['first_name'], 'string', 'min' => 3, 'max' => 25],
            [['second_name'], 'string', 'min' => 3, 'max' => 30],
            [['middle_name'], 'string', 'min' => 3, 'max' => 30],
            [['email'], 'string', 'min' => 5, 'max' => 50],
            ['email', 'email'],
        ];
    }

    public function save(): bool
    {
        $employer = new Employers();
        $employer->first_name = $this->first_name;
        $employer->second_name = $this->second_name;
        $employer->middle_name = $this->middle_name;
        $employer->email = $this->email;
        return $employer->save();
    }
}