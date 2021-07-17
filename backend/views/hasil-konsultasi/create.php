<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HasilKonsultasi */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Konsultasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-konsultasi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
