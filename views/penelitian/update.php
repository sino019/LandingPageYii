<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\penelitian $model */

$this->title = 'Update Penelitian: ' . $model->id_penelitian;
$this->params['breadcrumbs'][] = ['label' => 'Penelitians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penelitian, 'url' => ['view', 'id_penelitian' => $model->id_penelitian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penelitian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
