<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pharmacy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pharmacy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'small_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'net_id')->textInput() ?>

    <?= $form->field($model, 'administrator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_int')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_id')->textInput() ?>

    <?= $form->field($model, 'identifier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'connected')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'modify_at')->textInput() ?>

    <?= $form->field($model, 'available')->textInput() ?>

    <?= $form->field($model, 'archived')->textInput() ?>

    <?= $form->field($model, 'industrial')->textInput() ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <?= $form->field($model, 'notice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_show_price')->textInput() ?>

    <?= $form->field($model, 'type_show_amount')->textInput() ?>

    <?= $form->field($model, 'is_use_net_type')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'subclaster_id')->textInput() ?>

    <?= $form->field($model, 'subclaster_report_id')->textInput() ?>

    <?= $form->field($model, 'geo_x')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'geo_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yandex_map')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_geo_x')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_geo_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is24')->textInput() ?>

    <?= $form->field($model, 'mon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tues')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wedn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'san')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_id')->textInput() ?>

    <?= $form->field($model, 'reservation_url_id')->textInput() ?>

    <?= $form->field($model, 'is_delivery')->textInput() ?>

    <?= $form->field($model, 'is_reservation')->textInput() ?>

    <?= $form->field($model, 'pharm_type')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
