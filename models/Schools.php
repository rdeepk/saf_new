<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property int $id
 * @property string $name
 * @property string $phone_no
 * @property string $address
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'phone_no', 'address'], 'string', 'max' => 255],
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
            'phone_no' => 'Phone No',
            'address' => 'Address',
        ];
    }
}
