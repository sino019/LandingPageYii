<?php
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Url;
use app\models\Berita;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Berita::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
use app\models\beritaSearch;
$searchModel = new beritaSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
/** @var yii\web\View $this */
$this->title = 'BERITA 2024';
$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/site.css') ?>">
<div class="site-index">

    <div class="hero-section">
        <?= GridView::widget([
        'dataProvider' => new ActiveDataProvider([
            'query' => Berita::find()->where(['YEAR(Tanggal_Publikasi)' => 2024]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]),
        'filterModel' => $searchModel,
        'summary' => false, // Disable the "showing 1-20" summary text
        'columns' => [
            ['class' => 'yii\grid\SerialColumn', 'header' => 'No'],
            'Judul',
            'Konten:ntext',
            'Penulis',
            'Tanggal_Publikasi',
            'Kategori',
            'Ringkasan:ntext',
            'Status',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, berita $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],

    ]); ?>
    </div>
</div>