<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sponsers".
 *
 * @property int $id
 * @property string $name
 * @property string $company
 * @property string $phone_no
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $postal_code
 * @property string $province
 * @property string $country
 * @property string $notes
 */
class Sponsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sponsers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['notes'], 'string'],
            [['name', 'company', 'phone_no', 'email', 'address', 'city', 'postal_code', 'province', 'country'], 'string', 'max' => 255],
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
            'company' => 'Company',
            'phone_no' => 'Phone No',
            'email' => 'Email',
            'address' => 'Address',
            'city' => 'City',
            'postal_code' => 'Postal Code',
            'province' => 'Province',
            'country' => 'Country',
            'notes' => 'Notes',
        ];
    }
}
