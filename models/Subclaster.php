<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subclaster".
 *
 * @property int $id
 * @property string $name
 * @property int $claster_id
 * @property string|null $name_eng
 *
 * @property Claster $claster
 * @property Pharmacy[] $pharmacies
 */
class Subclaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subclaster';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['claster_id'], 'integer'],
            [['name', 'name_eng'], 'string', 'max' => 50],
            [['name'], 'unique'],
            [['claster_id'], 'exist', 'skipOnError' => true, 'targetClass' => Claster::className(), 'targetAttribute' => ['claster_id' => 'id']],
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
            'claster_id' => 'Claster ID',
            'name_eng' => 'Name Eng',
        ];
    }

    /**
     * Gets query for [[Claster]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClaster()
    {
        return $this->hasOne(Claster::className(), ['id' => 'claster_id']);
    }

    /**
     * Gets query for [[Pharmacies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPharmacies()
    {
        return $this->hasMany(Pharmacy::className(), ['subclaster_id' => 'id']);
    }
}
