<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PharmacySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pharmacies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pharmacy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pharmacy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'small_name',
            'address',
            'region_id',
            //'net_id',
            //'administrator',
            //'phone',
            //'phone_int',
            //'web_id',
            //'identifier',
            //'connected',
            //'create_at',
            //'update_at',
            //'modify_at',
            //'available',
            //'archived',
            //'industrial',
            //'state',
            //'notice',
            //'type_show_price',
            //'type_show_amount',
            //'is_use_net_type',
            //'uid',
            //'subclaster_id',
            //'subclaster_report_id',
            //'geo_x',
            //'geo_y',
            //'yandex_map',
            //'t_geo_x',
            //'t_geo_y',
            //'is24',
            //'mon',
            //'tues',
            //'wedn',
            //'thur',
            //'fri',
            //'sat',
            //'san',
            //'remark',
            //'action_id',
            //'reservation_url_id:url',
            //'is_delivery',
            //'is_reservation',
            //'pharm_type',
            [
                'class' => ActionColumn::className(),
//                'urlCreator' => function ($action, Pharmacy $model, $key, $index, $column) {
//                    return Url::toRoute([$action, 'id' => $model->id]);
//                 }
            ],
        ],
    ]); ?>


</div>
