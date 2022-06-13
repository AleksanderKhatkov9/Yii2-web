<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PharmacySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pharmacy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'small_name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'net_id') ?>

    <?php // echo $form->field($model, 'administrator') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'phone_int') ?>

    <?php // echo $form->field($model, 'web_id') ?>

    <?php // echo $form->field($model, 'identifier') ?>

    <?php // echo $form->field($model, 'connected') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'modify_at') ?>

    <?php // echo $form->field($model, 'available') ?>

    <?php // echo $form->field($model, 'archived') ?>

    <?php // echo $form->field($model, 'industrial') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'notice') ?>

    <?php // echo $form->field($model, 'type_show_price') ?>

    <?php // echo $form->field($model, 'type_show_amount') ?>

    <?php // echo $form->field($model, 'is_use_net_type') ?>

    <?php // echo $form->field($model, 'uid') ?>

    <?php // echo $form->field($model, 'subclaster_id') ?>

    <?php // echo $form->field($model, 'subclaster_report_id') ?>

    <?php // echo $form->field($model, 'geo_x') ?>

    <?php // echo $form->field($model, 'geo_y') ?>

    <?php // echo $form->field($model, 'yandex_map') ?>

    <?php // echo $form->field($model, 't_geo_x') ?>

    <?php // echo $form->field($model, 't_geo_y') ?>

    <?php // echo $form->field($model, 'is24') ?>

    <?php // echo $form->field($model, 'mon') ?>

    <?php // echo $form->field($model, 'tues') ?>

    <?php // echo $form->field($model, 'wedn') ?>

    <?php // echo $form->field($model, 'thur') ?>

    <?php // echo $form->field($model, 'fri') ?>

    <?php // echo $form->field($model, 'sat') ?>

    <?php // echo $form->field($model, 'san') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'action_id') ?>

    <?php // echo $form->field($model, 'reservation_url_id') ?>

    <?php // echo $form->field($model, 'is_delivery') ?>

    <?php // echo $form->field($model, 'is_reservation') ?>

    <?php // echo $form->field($model, 'pharm_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
