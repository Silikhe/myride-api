<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "rider".
 *
 * @property int $riderId
 * @property int $userId
 * @property string $phoneNumber
 *
 * @property Driver[] $drivers
 * @property User $user
 */
class Rider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'phoneNumber'], 'required'],
            [['userId'], 'integer'],
            [['phoneNumber'], 'string', 'max' => 30],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'riderId' => 'Rider ID',
            'userId' => 'User ID',
            'phoneNumber' => 'Phone Number',
        ];
    }

    /**
     * Gets query for [[Drivers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['riderId' => 'riderId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
