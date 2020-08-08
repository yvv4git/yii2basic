<?php

namespace app\models;

use yii\db\ActiveRecord;

class Employers extends ActiveRecord
{
    /**
     * Get table name
     *
     * @return string
     */
    public static function tableName(): string
    {
        return 'employers';
    }
}