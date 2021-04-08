<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $driverId
 * @property int $riderId
 * @property string $pickupLocation
 * @property string $destination
 * @property string $date
 * @property int|null $userId
 *
 * @property Rider $rider
 * @property User $user
 * @property Rides[] $rides
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['riderId', 'pickupLocation', 'destination', 'date'], 'required'],
            [['riderId', 'userId'], 'integer'],
            [['date'], 'safe'],
            [['pickupLocation', 'destination'], 'string', 'max' => 255],
            [['riderId'], 'exist', 'skipOnError' => true, 'targetClass' => Rider::className(), 'targetAttribute' => ['riderId' => 'riderId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'driverId' => 'Driver ID',
            'riderId' => 'Rider ID',
            'pickupLocation' => 'Pickup Location',
            'destination' => 'Destination',
            'date' => 'Date',
            'userId' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Rider]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRider()
    {
        return $this->hasOne(Rider::className(), ['riderId' => 'riderId']);
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

    /**
     * Gets query for [[Rides]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRides()
    {
        return $this->hasMany(Rides::className(), ['driverId' => 'driverId']);
    }
}
