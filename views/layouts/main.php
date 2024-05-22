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
        <header class="navbar navbar-expand-lg  navbar-light bg-white  py-3 border-bottom fixed-top">
            <div class="container">
                <a href="<?= Yii::$app->homeUrl ?>" class="navbar-brand d-flex align-items-center">
                    <img src="<?= Yii::getAlias('@web/assets/img/hero.png') ?>" alt="Logo" width="50"
                        class="me-2 rounded ">
                    <span class="fs-4 brand text-dark"><?= Yii::$app->name ?></span>
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
                            <ul class="dropdown-menu    " aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"><a href="<?= \yii\helpers\Url::to(['/site/visimisi']) ?>">VISI
                                        DAN MISI</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/sejarah']) ?>">SEJARAH</a></li>
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/struktur']) ?>">STRUKTUR</a></li>

                            </ul>

                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link" href="/site/index?#berita">
                                BERITA
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link" href="/site/index?#agenda">
                                AGENDA
                            </a>
                        </li>
                        <li class="nav-item me-2">
                            <a href="<?= \yii\helpers\Url::to(['/site/pengabdian']) ?>" class="nav-link">PENGABDIAN</a>
                        </li>
                        </li>
                        </li>
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PENELITIAN
                            </a>
                            <ul class="dropdown-menu  " aria-labelledby="navbarDropdown">
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
                                PUBLIKASI
                            </a>
                            <ul class="dropdown-menu  " aria-labelledby="navbarDropdown">
                                <li class="dropdown-item"><a
                                        href="<?= \yii\helpers\Url::to(['/site/artikel']) ?>">ARTIKEL</a></li>
                                <li class="dropdown-item"><a href="<?= \yii\helpers\Url::to(['/site/haki']) ?>">HAKI</a>
                                </li>

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

        </header>
        <!-- <marquee behavior="scroll" direction="left">
            <p>Email: info@lppm-unand.ac.id | Phone: +62 123 456 789</p>
        </marquee> -->

    </div>

    </div>

    </div>

    <main id="main" class="flex-shrink-0      " role="main">
        <div class="">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-dark text-light" style="font-size: 0.8rem;">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <p>Email: info@lppm-unand.ac.id | Phone: +62 123 456 789</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <a href="https://facebook.com/lppm.unand" target="_blank" class="text-light mx-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"
                            style="width: 24px; height: 24px;">
                    </a>
                    <a href="https://twitter.com/lppm_unand" target="_blank" class="text-light mx-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter"
                            style="width: 24px; height: 24px;">
                    </a>
                    <a href="https://instagram.com/lppm.unand" target="_blank" class="text-light mx-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"
                            style="width: 24px; height: 24px;">
                    </a>
                </div>
            </div>
            <div class="row mt-2">
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