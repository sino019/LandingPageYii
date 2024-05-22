<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\penelitian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penelitian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_penelitian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peneliti_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_mulai')->textInput() ?>

    <?= $form->field($model, 'tanggal_selesai')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Diajukan' => 'Diajukan', 'Sedang Berlangsung' => 'Sedang Berlangsung', 'Selesai' => 'Selesai', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
