<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Url;
use app\models\penelitian;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => penelitian::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);

use app\models\penelitianSearch;
$searchModel = new penelitianSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

/** @var yii\web\View $this */

$this->title = 'PENELITIAN 2024';
$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/site.css') ?>">
<div class="site-index">

    <div class="hero-section">
        <?= GridView::widget([
        'dataProvider' => new ActiveDataProvider([
            'query' => penelitian::find()->where(['YEAR(tanggal_selesai)' => 2022]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]),
        'filterModel' => $searchModel,
        'summary' => false, // Disable the "showing 1-20" summary text
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 'No'],
            'judul_penelitian',
            'peneliti_utama',
            'tanggal_mulai',
            'tanggal_selesai',
            //'status',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, penelitian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penelitian' => $model->id_penelitian]);
                 }
            ],
        ],
    ]); ?>
    </div>
</div>