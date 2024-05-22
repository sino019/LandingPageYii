<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="site-error container mt-5">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="bg-danger p-5 rounded text-white ">
        <p>Halaman Belum Ada.</p>
    </div>



</div>