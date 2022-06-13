<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "action".
 *
 * @property int $id
 * @property string $msg
 * @property string $hash
 *
 * @property Pharmacy[] $pharmacies
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['msg'], 'string', 'max' => 6000],
            [['hash'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'msg' => 'Msg',
            'hash' => 'Hash',
        ];
    }

    /**
     * Gets query for [[Pharmacies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPharmacies()
    {
        return $this->hasMany(Pharmacy::className(), ['action_id' => 'id']);
    }
}
