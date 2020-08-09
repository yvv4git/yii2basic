<?php
/**
 * @property string $first_name
 * @property string $second_name
 * @property string $middle_name
 * @property string $email_name
 */

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