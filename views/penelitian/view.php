<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\penelitian $model */

$this->title = $model->id_penelitian;
$this->params['breadcrumbs'][] = ['label' => 'Penelitians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penelitian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_penelitian' => $model->id_penelitian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_penelitian' => $model->id_penelitian], [
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
            'id_penelitian',
            'judul_penelitian',
            'peneliti_utama',
            'tanggal_mulai',
            'tanggal_selesai',
            'status',
        ],
    ]) ?>

</div>