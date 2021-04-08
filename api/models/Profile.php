<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property string $name
 * @property int $countryId
 * @property string $lastname
 * @property int $phoneNumber
 *
 * @property Countries $country
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'countryId', 'lastname', 'phoneNumber'], 'required'],
            [['countryId', 'phoneNumber'], 'integer'],
            [['name'], 'string', 'max' => 225],
            [['lastname'], 'string', 'max' => 20],
            [['countryId'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['countryId' => 'countryId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'countryId' => 'Country ID',
            'lastname' => 'Lastname',
            'phoneNumber' => 'Phone Number',
        ];
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['countryId' => 'countryId']);
    }
}
