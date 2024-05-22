<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\pengabdian $model */

$this->title = 'Create Pengabdian';
$this->params['breadcrumbs'][] = ['label' => 'Pengabdians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengabdian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
