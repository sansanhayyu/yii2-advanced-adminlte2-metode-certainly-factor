<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Diagnosa */

$this->title = 'Tambah Diagnosa';
$this->params['breadcrumbs'][] = ['label' => 'Diagnosa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
