<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region_site".
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property string $name_eng
 *
 * @property Pharmacy[] $pharmacies
 */
class RegionSite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_site';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id'], 'integer'],
            [['name_eng'], 'required'],
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
            'region_id' => 'Region ID',
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
        return $this->hasMany(Pharmacy::className(), ['region_id' => 'id']);
    }
}
