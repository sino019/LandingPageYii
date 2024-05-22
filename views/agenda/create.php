<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\agendalppm $model */

$this->title = 'Create Agendalppm';
$this->params['breadcrumbs'][] = ['label' => 'Agendalppms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendalppm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
