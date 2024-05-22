<?php
/** @var yii\web\View $this */
use app\models\Penelitian;
use yii\widgets\LinkPager;
use yii\data\Pagination;

$query = Penelitian::find()->where(['like', 'tanggal_selesai', '2023']);
$countQuery = clone $query;
$pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 2]);
$penelitianList = $query->offset($pages->offset)
    ->limit($pages->limit)
    ->all();

?>
<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/site.css') ?>">
<div class="site-index container">

    <div class="hero-section pt-5">

        <h1>Penelitian 2023</h1>

        <div class="penelitian-section pt-5">

            <ul class="">
                <?php foreach ($penelitianList as $penelitian): ?>
                <li class="border p-2 rounded mb-2">
                    <h3><?= htmlspecialchars($penelitian->judul_penelitian) ?></h3>
                    <p>Peneliti Utama: <?= htmlspecialchars($penelitian->peneliti_utama) ?></p>
                    <p>Tanggal Mulai: <?= htmlspecialchars($penelitian->tanggal_mulai) ?></p>
                    <p>Tanggal Selesai: <?= htmlspecialchars($penelitian->tanggal_selesai) ?></p>
                    <p>Status: <?= htmlspecialchars($penelitian->status) ?></p>
                    <a href="/path/to/download" class="btn btn-primary mt-2">Download</a>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="pagination-container p-2 text-center">
                <?= LinkPager::widget([
                    'pagination' => $pages,
                    'options' => ['class' => 'pagination justify-content-center'],
                    'linkOptions' => ['class' => 'page-link'],
                    'prevPageLabel' => '&laquo;',
                    'nextPageLabel' => '&raquo;',
                    'disabledPageCssClass' => 'disabled',
                    'activePageCssClass' => 'active',
                ]) ?>
            </div>
        </div>
    </div>
</div>