<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Diagnosa;
use common\models\Gejala;

/* @var $this yii\web\View */
/* @var $model common\models\Pakar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pakar-form">
    <div class="panel">
        <div class="panel-info">
            <div class="panel-heading">
                <h4>
                    <?= $this->title ?>
                    <span class="pull-right">
                        <?= Html::a('<span class="btn-label"><i class="fa fa-arrow-left"></i></span>  Kembali', ['index'], ['class' => 'btn btn-danger btn-sm waves-effect-light']); ?>
                    </span>
                </h4>
            </div>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
            
            <?php
                $diagnosa=Diagnosa::find()->all();
                echo $form->field($model, 'pkode_diagnosa')->dropDownList(ArrayHelper::map($diagnosa, 'kode_diagnosa',function($diagnosa){return $diagnosa->kode_diagnosa.' - '.$diagnosa->nama_diagnosa;}), ['prompt'=>'.:Pilih Diagnosa:.']);
            ?>

            <?php
                $gejala=Gejala::find()->all();
                echo $form->field($model, 'pkode_gejala')->dropDownList(ArrayHelper::map($gejala, 'kode_gejala',function($gejala){return $gejala->kode_gejala.' - '.$gejala->nama_gejala;}), ['prompt'=>'.:Pilih Gejala:.']);
            ?>

            <?= $form->field($model, 'evidence')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
