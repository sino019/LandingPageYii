<?php

/** @var yii\web\View $this */
/** @var string $content */



use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
$this->registerJsFile('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<link rel="stylesheet" href="<?= Yii::getAlias('@web/css/site.css') ?>">
<script src="<?= Yii::getAlias('@web/assets/node_modules/scrollreveal/dist/scrollreveal.min.js') ?>"></script>
<script src="<?= Yii::getAlias('@web/js/script.js') ?>"></script>


<head>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>

<body class="d-flex flex-column ">
    <?php $this->beginBody() ?>



    <div id="header">
        <header class="navbar navbar-expand-lg bg-success navbar-dark py-3 border-bottom">
            <div class="container">
                <a href="<?= Yii::$app->homeUrl ?>" class="navbar-brand d-flex align-items-center">
                    <img src="<?= Yii::getAlias('@web/assets/img/hero.png') ?>" alt="Logo" width="70"
                        class="me-2 rounded ">
                    <span class="fs-4 brand"><?= Yii::$app->name ?></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                TENTANG LPPM
                            </a>
                            <ul class="dropdown-menu mt-md-4    " aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"><a href="<?= \yii\helpers\Url::to(['/site/visimisi']) ?>">VISI
                                        DAN MISI</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/sejarah']) ?>">SEJARAH</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/struktur']) ?>">STRUKTUR</a></li>

                            </ul>

                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                BERITA
                            </a>
                            <ul class="dropdown-menu mt-md-4 " aria-labelledby="navbarDropdown">

                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/berita2024']) ?>">BERITA
                                        2024</a></li>


                            </ul>

                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PENELITIAN
                            </a>
                            <ul class="dropdown-menu mt-md-4 " aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/penelitian2020']) ?>">TAHUN 2020</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/penelitian2021']) ?>">TAHUN
                                        2021</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/penelitian2022']) ?>">TAHUN 2022</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/penelitian2023']) ?>">TAHUN 2023</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PENGABDIAN
                            </a>
                            <ul class="dropdown-menu mt-md-4 " aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/visimisi']) ?>">Pendidikan dan
                                        Pelatihan</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/sejarah']) ?>">Kesehatan dan
                                        Kesejahteraan</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/struktur']) ?>">Pengembangan Ekonomi</a>
                                </li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/struktur']) ?>">Lingkungan dan
                                        Pertanian</a>
                                </li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/struktur']) ?>">Infrastruktur dan
                                        Teknologi</a>
                                </li>

                            </ul>

                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                AGENDA
                            </a>
                            <ul class="dropdown-menu mt-md-4 " aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/visimisi']) ?>">AGENDA 2024</a></li>
                            </ul>

                        </li>

                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PUBLIKASI
                            </a>
                            <ul class="dropdown-menu mt-md-4 " aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/visimisi']) ?>">ARTIKEL</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/sejarah']) ?>">HAKI</a></li>

                            </ul>

                        </li>
                        <?php if (Yii::$app->user->isGuest): ?>
                        <li class="nav-item "><a href="<?= \yii\helpers\Url::to(['/site/login']) ?>"
                                class="nav-link ">LOGIN</a></li>
                        <?php else: ?>
                        <li class="nav-item ">
                            <a href="<?= \yii\helpers\Url::to(['/site/logout']) ?>" class="nav-link "
                                data-method="post">
                                LOGOUT
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <marquee behavior="scroll" direction="left">
                <p>Email: info@lppm-unand.ac.id | Phone: +62 123 456 789</p>
            </marquee>
        </header>

    </div>
    </div>

    </div>

    <main id="main" class="flex-shrink-0    " role="main" style="min-height: 100vh;">
        <div class="container ">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-success text-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>Email: info@lppm-unand.ac.id</p>
                    <p>Phone: +62 123 456 789</p>
                </div>
                <div class="col-md-4">
                    <h5>Social Media</h5>
                    <a href="https://facebook.com/lppm.unand" target="_blank" class="text-light">Facebook</a><br>
                    <a href="https://twitter.com/lppm_unand" target="_blank" class="text-light">Twitter</a><br>
                    <a href="https://instagram.com/lppm.unand" target="_blank" class="text-light">Instagram</a>
                </div>
                <div class="col-md-4">
                    <h5>Map</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.548123456789!2d110.123456789!3d-7.123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e123456789abcdef%3A0x123456789abcdef!2sLPPM%20UNAND!5e0!3m2!1sen!2sid!4v1234567890"
                        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-12">
                    <h5>Layanan</h5>
                    <a href="<?= \yii\helpers\Url::to(['/site/layanan1']) ?>" class="text-light">Layanan 1</a><br>
                    <a href="<?= \yii\helpers\Url::to(['/site/layanan2']) ?>" class="text-light">Layanan 2</a><br>
                    <a href="<?= \yii\helpers\Url::to(['/site/layanan3']) ?>" class="text-light">Layanan 3</a>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="col-12">
                    &copy; LPPM UNAND <?= date('Y') ?>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>