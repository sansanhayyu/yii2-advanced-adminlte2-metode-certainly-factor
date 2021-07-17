<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Konsultasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="konsultasi-form">
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

        <?= $form->field($model, 'nama_penderita')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jenis_kelamin')->dropDownList([
            'Laki-laki' => 'Laki-laki',
            'Perempuan' => 'Perempuan',
            ], ['prompt'=>'--Pilih jenis--']); ?>

        <?= $form->field($model, 'usia_penderita')->textInput() ?>

        <?= $form->field($model, 'alamat_penderita')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('<span class="btn-label"><i class="fa fa-save"></i></span> Simpan', ['class' => 'btn btn-success waves-effect waves-light']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
