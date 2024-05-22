<?php

use app\models\penelitian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PenelitianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penelitians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penelitian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penelitian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'judul_penelitian',
            'peneliti_utama',
            'tanggal_mulai',
            'tanggal_selesai',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, penelitian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penelitian' => $model->id_penelitian]);
                 }
            ],
        ],
    ]); ?>


</div>