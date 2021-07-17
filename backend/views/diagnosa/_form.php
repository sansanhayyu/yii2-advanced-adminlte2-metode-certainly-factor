<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Diagnosa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagnosa-form">
    <div class="panel">
        <div class="panel-info">
            <div class="panel-heading">
                <?= $this->title ?>
                <span class="pull-right">
                    <?= Html::a('<span class="btn-label"><i class="fa fa-arrow-left"></i></span>  Kembali', ['index'], ['class' => 'btn btn-danger btn-sm waves-effect-light']); ?>
                </span>
            </div>
        </div>
        <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'kode_diagnosa')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama_diagnosa')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'solusi')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
