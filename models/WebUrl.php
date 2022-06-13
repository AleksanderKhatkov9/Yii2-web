<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_url".
 *
 * @property int $id
 * @property string $web
 *
 * @property Pharmacy[] $pharmacies
 */
class WebUrl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_url';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['web'], 'string', 'max' => 255],
            [['web'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'web' => 'Web',
        ];
    }

    /**
     * Gets query for [[Pharmacies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPharmacies()
    {
        return $this->hasMany(Pharmacy::className(), ['web_id' => 'id']);
    }
}
