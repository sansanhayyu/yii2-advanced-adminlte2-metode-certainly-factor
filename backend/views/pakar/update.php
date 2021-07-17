<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pakar */

$this->title = 'Update Pakar: ' . $model->id_pakar;
$this->params['breadcrumbs'][] = ['label' => 'Pakars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pakar, 'url' => ['view', 'id' => $model->id_pakar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pakar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
