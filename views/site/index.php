<?php

/** @var yii\web\View $this */
// <?= Yii::$app->user->isGuest ? 'Guest' : Yii::$app->user->identity->username 
use app\models\Berita;
use app\models\AgendaLppm;
$agendas = AgendaLppm::find()->orderBy(['waktu' => SORT_DESC])->limit(6)->all();
$beritaTerbaru = Berita::find()->orderBy(['Tanggal_Publikasi' => SORT_DESC])->limit(4)->all();
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

?>


<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/site.css') ?>">
<div class="site-index " id="hero">

    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2500"
        style="height: 100vh; position: relative; z-index: -1;">
        <div class="carousel-inner" style="height: 100%; z-index: -1;">
            <div class="carousel-item active" style="height: 100%; z-index: -1;">
                <img src="<?= Yii::getAlias('@web/assets/img/unand1.jpg') ?>" class="d-block w-100" alt="Kampus"
                    style="height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -20; filter: brightness(0.5);">
            </div>
            <div class="carousel-item" style="height: 100%;">
                <img src="<?= Yii::getAlias('@web/assets/img/unand2.jpg') ?>" class="d-block w-100" alt="Kampus"
                    style="height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -20; filter: brightness(0.5);">
            </div>
            <div class="carousel-item" style="height: 100%;">
                <img src="<?= Yii::getAlias('@web/assets/img/unand3.jpg') ?>" class="d-block w-100" alt="Kampus"
                    style="height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: -20; filter: brightness(0.5);">
            </div>
        </div>
        <div class="carousel-caption" style="position: absolute; top: 50%; transform: translateY(-50%); z-index: 0;">

            <h1 class="d-block d-md-block d-lg-block" style="font-size: 1.5rem; font-size: 2rem;">Selamat datang di
                website LPPM UNAND,
            </h1>

            <p class="d-block d-md-block d-lg-block" style="font-size: 0.875rem; font-size: 1.25rem;">Informasi terbaru
                tentang penelitian
                dan
                pengabdian kepada masyarakat.</p>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
        style="z-index: 100;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
        style="z-index: 100;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>


    <section id="berita" class="py-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Berita Terbaru</h2>
                    <p>Informasi terkini seputar kegiatan dan pencapaian LPPM UNAND.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mb-4">
                    <div class="row">
                        <?php
                        
                        foreach ($beritaTerbaru as $beritaItem): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <img src="<?= Yii::getAlias('@web/assets/img/unand1.jpg') ?>" class="card-img-top"
                                    alt="<?= $beritaItem->Judul ?>">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?= $beritaItem->Judul ?></h5>
                                    <p class="card-text flex-grow-1"><?= $beritaItem->Ringkasan ?></p>
                                    <a href="<?= \yii\helpers\Url::to(['/site/berita', 'id' => $beritaItem->ID]) ?>"
                                        class="btn border mt-auto">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <aside class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Berita Lainnya</h5>
                            <ul class="">
                                <?php
                                $beritaLainnya = Berita::find()->orderBy(['Tanggal_Publikasi' => SORT_ASC])->limit(10)->all();
                                foreach ($beritaLainnya as $berita): ?>
                                <li class="mb-2 border-bottom">

                                    <a href="<?= \yii\helpers\Url::to(['/site/berita', 'id' => $berita->ID]) ?>">

                                        <?= $berita->Judul ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section id="agenda" class="py-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Agenda Terbaru</h2>
                    <p>Informasi terkini seputar agenda dan kegiatan LPPM UNAND.</p>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($agendas as $agendaItem): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $agendaItem->kegiatan ?></h5>
                            <p class="card-text"><img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png"
                                    alt="PIC Icon" width="16" height="16"> <strong>PIC:</strong> <?= $agendaItem->pic ?>
                            </p>
                            <p class="card-text"><img src="https://cdn-icons-png.flaticon.com/512/684/684908.png"
                                    alt="Location Icon" width="16" height="16"> <strong>Lokasi:</strong>
                                <?= $agendaItem->lokasi ?></p>
                            <p class="card-text"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png"
                                    alt="Time Icon" width="16" height="16"> <strong>Waktu:</strong>
                                <?= $agendaItem->waktu ?></p>
                            <p class="card-text flex-grow-1"><img
                                    src="https://cdn-icons-png.flaticon.com/512/1828/1828880.png" alt="Notes Icon"
                                    width="16" height="16"> <strong>Catatan:</strong>
                                <?= $agendaItem->catatan ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>