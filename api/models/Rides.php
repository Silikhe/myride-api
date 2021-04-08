<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "rides".
 *
 * @property int $rideId
 * @property int $driverId
 * @property string $date
 * @property string $startTime
 * @property string $startPoint
 * @property string $destination
 * @property string $pickupLocation
 *
 * @property Bookings[] $bookings
 * @property Payment[] $payments
 * @property Driver $driver
 */
class Rides extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rides';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['driverId', 'date', 'startTime', 'startPoint', 'destination', 'pickupLocation'], 'required'],
            [['driverId'], 'integer'],
            [['date', 'startTime'], 'safe'],
            [['startPoint', 'destination', 'pickupLocation'], 'string'],
            [['driverId'], 'exist', 'skipOnError' => true, 'targetClass' => Driver::className(), 'targetAttribute' => ['driverId' => 'driverId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rideId' => 'Ride ID',
            'driverId' => 'Driver ID',
            'date' => 'Date',
            'startTime' => 'Start Time',
            'startPoint' => 'Start Point',
            'destination' => 'Destination',
            'pickupLocation' => 'Pickup Location',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Bookings::className(), ['rideId' => 'rideId']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['rideId' => 'rideId']);
    }

    /**
     * Gets query for [[Driver]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['driverId' => 'driverId']);
    }
}
