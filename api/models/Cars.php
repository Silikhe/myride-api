<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $carId
 * @property string $carType
 * @property string $numberPlate
 * @property string $engineCapacity
 * @property int $numberOfSeats
 * @property int $logbookNumber
 *
 * @property Driver[] $drivers
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['carType', 'numberPlate', 'engineCapacity', 'numberOfSeats', 'logbookNumber'], 'required'],
            [['numberOfSeats', 'logbookNumber'], 'integer'],
            [['carType', 'numberPlate', 'engineCapacity'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'carId' => 'Car ID',
            'carType' => 'Car Type',
            'numberPlate' => 'Number Plate',
            'engineCapacity' => 'Engine Capacity',
            'numberOfSeats' => 'Number Of Seats',
            'logbookNumber' => 'Logbook Number',
        ];
    }

    /**
     * Gets query for [[Drivers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['carId' => 'carId']);
    }
}
