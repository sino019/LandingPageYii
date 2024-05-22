<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\berita $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Konten')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Penulis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal_Publikasi')->textInput() ?>

    <?= $form->field($model, 'Kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ringkasan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'draft' => 'Draft', 'published' => 'Published', 'archived' => 'Archived', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
