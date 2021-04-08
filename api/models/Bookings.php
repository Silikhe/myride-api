<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property int $bookingId
 * @property float $amount
 * @property int $rideId
 * @property string $date
 * @property int $passengerId
 * @property int $status
 *
 * @property Rides $ride
 * @property Passenger $passenger
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'rideId', 'passengerId', 'status'], 'required'],
            [['amount'], 'number'],
            [['rideId', 'passengerId', 'status'], 'integer'],
            [['date'], 'safe'],
            [['rideId'], 'exist', 'skipOnError' => true, 'targetClass' => Rides::className(), 'targetAttribute' => ['rideId' => 'rideId']],
            [['passengerId'], 'exist', 'skipOnError' => true, 'targetClass' => Passenger::className(), 'targetAttribute' => ['passengerId' => 'passengerId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookingId' => 'Booking ID',
            'amount' => 'Amount',
            'rideId' => 'Ride ID',
            'date' => 'Date',
            'passengerId' => 'Passenger ID',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Ride]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRide()
    {
        return $this->hasOne(Rides::className(), ['rideId' => 'rideId']);
    }

    /**
     * Gets query for [[Passenger]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPassenger()
    {
        return $this->hasOne(Passenger::className(), ['passengerId' => 'passengerId']);
    }
}
