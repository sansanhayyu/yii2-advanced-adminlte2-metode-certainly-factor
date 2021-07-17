<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gejala */

$this->title = 'Tambah Gejala';
$this->params['breadcrumbs'][] = ['label' => 'Gejala', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gejala-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
