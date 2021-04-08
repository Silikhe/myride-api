<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "phoneNumber".
 *
 * @property string $phoneNumber
 */
class PhoneNumber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phoneNumber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phoneNumber'], 'required'],
            [['phoneNumber'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'phoneNumber' => 'Phone Number',
        ];
    }
}
