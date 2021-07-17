<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pakar */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Pakar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pakar-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
