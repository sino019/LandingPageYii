<?php

/** @var yii\web\View $this */
use app\models\Pengabdian;
use yii\widgets\LinkPager;
use yii\data\Pagination;

$query = Pengabdian::find();
$countQuery = clone $query;
$pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 2]);
$pengabdianList = $query->offset($pages->offset)
    ->limit($pages->limit)
    ->all();
?>

<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/site.css') ?>">
<div class="site-index container">

    <div class="hero-section mt-5">
        <h1>PENGABDIAN</h1>
        <div class="pengabdian-section pt-5">
            <ul class="">
                <?php foreach ($pengabdianList as $pengabdian): ?>
                <li class="border p-2 rounded mb-2">
                    <h3><?= htmlspecialchars($pengabdian->judul) ?></h3>
                    <p>Deskripsi: <?= htmlspecialchars($pengabdian->deskripsi) ?></p>
                    <p>Tanggal Mulai: <?= htmlspecialchars($pengabdian->tanggal_mulai) ?></p>
                    <p>Tanggal Selesai: <?= htmlspecialchars($pengabdian->tanggal_selesai) ?></p>
                    <p>Koordinator: <?= htmlspecialchars($pengabdian->koordinator) ?></p>
                    <p>Anggaran: Rp. <?= htmlspecialchars($pengabdian->anggaran) ?></p>
                    <p>Status: <?= htmlspecialchars($pengabdian->status) ?></p>
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