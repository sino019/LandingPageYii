<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\beritaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Judul') ?>

    <?= $form->field($model, 'Konten') ?>

    <?= $form->field($model, 'Penulis') ?>

    <?= $form->field($model, 'Tanggal_Publikasi') ?>

    <?php // echo $form->field($model, 'Kategori') ?>

    <?php // echo $form->field($model, 'Ringkasan') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
