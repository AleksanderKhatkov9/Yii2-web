<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pharmacy;

/**
 * PharmacySearch represents the model behind the search form of `app\models\Pharmacy`.
 */
class PharmacySearch extends Pharmacy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'region_id', 'net_id', 'web_id', 'connected', 'update_at', 'modify_at', 'available', 'archived', 'industrial', 'state', 'type_show_price', 'type_show_amount', 'is_use_net_type', 'uid', 'subclaster_id', 'subclaster_report_id', 'is24', 'action_id', 'reservation_url_id', 'is_delivery', 'is_reservation', 'pharm_type'], 'integer'],
            [['name', 'small_name', 'address', 'administrator', 'phone', 'phone_int', 'identifier', 'create_at', 'notice', 'yandex_map', 'mon', 'tues', 'wedn', 'thur', 'fri', 'sat', 'san', 'remark'], 'safe'],
            [['geo_x', 'geo_y', 't_geo_x', 't_geo_y'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pharmacy::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'region_id' => $this->region_id,
            'net_id' => $this->net_id,
            'web_id' => $this->web_id,
            'connected' => $this->connected,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'modify_at' => $this->modify_at,
            'available' => $this->available,
            'archived' => $this->archived,
            'industrial' => $this->industrial,
            'state' => $this->state,
            'type_show_price' => $this->type_show_price,
            'type_show_amount' => $this->type_show_amount,
            'is_use_net_type' => $this->is_use_net_type,
            'uid' => $this->uid,
            'subclaster_id' => $this->subclaster_id,
            'subclaster_report_id' => $this->subclaster_report_id,
            'geo_x' => $this->geo_x,
            'geo_y' => $this->geo_y,
            't_geo_x' => $this->t_geo_x,
            't_geo_y' => $this->t_geo_y,
            'is24' => $this->is24,
            'action_id' => $this->action_id,
            'reservation_url_id' => $this->reservation_url_id,
            'is_delivery' => $this->is_delivery,
            'is_reservation' => $this->is_reservation,
            'pharm_type' => $this->pharm_type,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'small_name', $this->small_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'administrator', $this->administrator])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'phone_int', $this->phone_int])
            ->andFilterWhere(['like', 'identifier', $this->identifier])
            ->andFilterWhere(['like', 'notice', $this->notice])
            ->andFilterWhere(['like', 'yandex_map', $this->yandex_map])
            ->andFilterWhere(['like', 'mon', $this->mon])
            ->andFilterWhere(['like', 'tues', $this->tues])
            ->andFilterWhere(['like', 'wedn', $this->wedn])
            ->andFilterWhere(['like', 'thur', $this->thur])
            ->andFilterWhere(['like', 'fri', $this->fri])
            ->andFilterWhere(['like', 'sat', $this->sat])
            ->andFilterWhere(['like', 'san', $this->san])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
