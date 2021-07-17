<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Diagnosa */

$this->title = 'Update Diagnosa: ' . $model->kode_diagnosa;
$this->params['breadcrumbs'][] = ['label' => 'Diagnosas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_diagnosa, 'url' => ['view', 'id' => $model->kode_diagnosa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diagnosa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
