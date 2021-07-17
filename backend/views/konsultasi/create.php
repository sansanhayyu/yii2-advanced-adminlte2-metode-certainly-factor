<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Konsultasi */

$this->title = 'Tambah Konsultasi';
$this->params['breadcrumbs'][] = ['label' => 'Konsultasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsultasi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
