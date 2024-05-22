<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\berita $model */

$this->title = 'Create Berita';
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::a('Back', ['index'], ['class' => 'btn btn-primary']) ?>
<div class="berita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>