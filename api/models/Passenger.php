<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "passenger".
 *
 * @property int $passengerId
 * @property int $userId
 * @property string $destination
 * @property string $pickupLocation
 * @property string $date
 *
 * @property Bookings[] $bookings
 * @property User $user
 */
class Passenger extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'passenger';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'destination', 'pickupLocation', 'date'], 'required'],
            [['userId'], 'integer'],
            [['date'], 'safe'],
            [['destination', 'pickupLocation'], 'string', 'max' => 100],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'passengerId' => 'Passenger ID',
            'userId' => 'User ID',
            'destination' => 'Destination',
            'pickupLocation' => 'Pickup Location',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Bookings::className(), ['passengerId' => 'passengerId']);
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
