<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "pass".
 *
 * @property int $passengerId
 * @property int $userId
 * @property string $pickupLocation
 * @property string $date
 * @property string $destination
 */
class Pass extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pass';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'pickupLocation', 'date', 'destination'], 'required'],
            [['userId'], 'integer'],
            [['date'], 'safe'],
            [['pickupLocation', 'destination'], 'string', 'max' => 255],
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
            'pickupLocation' => 'Pickup Location',
            'date' => 'Date',
            'destination' => 'Destination',
        ];
    }
}
