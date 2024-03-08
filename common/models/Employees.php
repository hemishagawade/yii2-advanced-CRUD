<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string|null $name
 * @property string $email
 * @property string $department
 * @property string $joining_date
 * @property int $status
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'department', 'joining_date'], 'required'],
            [['joining_date'], 'safe'],
            [['status'], 'integer'],
            [['name', 'email', 'department'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'department' => 'Department',
            'joining_date' => 'Joining Date',
            'status' => 'Status',
        ];
    }
}


