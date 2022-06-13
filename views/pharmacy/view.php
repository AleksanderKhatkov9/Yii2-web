<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pharmacy */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pharmacies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pharmacy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'small_name',
            'address',
            'region_id',
            'net_id',
            'administrator',
            'phone',
            'phone_int',
            'web_id',
            'identifier',
            'connected',
            'create_at',
            'update_at',
            'modify_at',
            'available',
            'archived',
            'industrial',
            'state',
            'notice',
            'type_show_price',
            'type_show_amount',
            'is_use_net_type',
            'uid',
            'subclaster_id',
            'subclaster_report_id',
            'geo_x',
            'geo_y',
            'yandex_map',
            't_geo_x',
            't_geo_y',
            'is24',
            'mon',
            'tues',
            'wedn',
            'thur',
            'fri',
            'sat',
            'san',
            'remark',
            'action_id',
            'reservation_url_id:url',
            'is_delivery',
            'is_reservation',
            'pharm_type',
        ],
    ]) ?>

</div>
