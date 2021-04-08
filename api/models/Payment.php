<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $paymentId
 * @property float $amount
 * @property int $userId
 * @property int $rideId
 *
 * @property Rides $ride
 * @property User $user
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'userId', 'rideId'], 'required'],
            [['amount'], 'number'],
            [['userId', 'rideId'], 'integer'],
            [['rideId'], 'exist', 'skipOnError' => true, 'targetClass' => Rides::className(), 'targetAttribute' => ['rideId' => 'rideId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'paymentId' => 'Payment ID',
            'amount' => 'Amount',
            'userId' => 'User ID',
            'rideId' => 'Ride ID',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
