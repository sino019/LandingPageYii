<?php

/** @var yii\web\View $this */

$this->title = 'LPPM UNAND';
$this->params['breadcrumbs'][] = $this->title;
?>


<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/site.css') ?>">
<div class="site-index">

    <div class="hero-section">
        <h1>Selamat datang di website LPPM UNAND,
            <?= Yii::$app->user->isGuest ? 'Guest' : Yii::$app->user->identity->username ?> </h1>
        <p>Informasi terbaru tentang penelitian dan pengabdian kepada masyarakat.</p>
    </div>
</div>