<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "net".
 *
 * @property int $id
 * @property string $name
 * @property int $holding_id
 * @property int $is_state
 * @property int $type_show_price
 * @property int $type_show_amount
 * @property int $type_show_shelf
 * @property int $is_present
 * @property string|null $name_eng
 *
 * @property Pharmacy[] $pharmacies
 */
class Net extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'net';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['holding_id', 'is_state', 'type_show_price', 'type_show_amount', 'type_show_shelf', 'is_present'], 'integer'],
            [['name', 'name_eng'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'holding_id' => 'Holding ID',
            'is_state' => 'Is State',
            'type_show_price' => 'Type Show Price',
            'type_show_amount' => 'Type Show Amount',
            'type_show_shelf' => 'Type Show Shelf',
            'is_present' => 'Is Present',
            'name_eng' => 'Name Eng',
        ];
    }

    /**
     * Gets query for [[Pharmacies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPharmacies()
    {
        return $this->hasMany(Pharmacy::className(), ['net_id' => 'id']);
    }
}
