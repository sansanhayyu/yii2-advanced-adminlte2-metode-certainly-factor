<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KonsultasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MANAJEMEN KONSULTASI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsultasi-index panel panel-info">
    <div class="panel-heading">
        <h4>
            <?= Html::encode($this->title) ?>
            <span class="pull-right">
                <?= Html::a('Tambah Data Konsultasi', ['create'], ['class' => 'btn btn-success btn-sm waves-effect waves-light']) ?>
            </span>
        </h4>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id_konsultasi',
                'nama_penderita',
                'jenis_kelamin',
                'usia_penderita',
                'alamat_penderita:ntext',
                //'kode_diagnosa',
                //'hasil_cf',
                'tanggal',
                //'id_user',

                //['class' => 'yii\grid\ActionColumn'],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Menu',
                    'template' => '{leadKonsultasi} {leadUpdate} {leadDelete}',
                    'buttons' => [
                        'leadUpdate' => function($url, $model) {
                            $url = Url::to(['update', 'id' => $model->id_konsultasi]);
                            return Html::a('<span class="fa fa-pencil"></span>', $url, ['class' => 'btn btn-warning']);
                        },
                        'leadDelete' => function($url, $model) {
                            $url = Url::to(['delete', 'id' => $model->id_konsultasi]);
                            return Html::a('<span class="fa fa-trash"></span>', $url, [
                                'title' => 'delete',
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this data ?'),
                                'data-method' => 'post',
                                'class' => 'btn btn-danger',
                            ]);
                        },
                        'leadKonsultasi' => function($url, $model) {
                            $url = Url::to(['konsultasi', 'id' => $model->id_konsultasi]);
                            return Html::a('<span class="fa fa-shield"></span>', $url, ['class' => 'btn btn-success']);
                        },
                    ] 
                ]
            ],
        ]); ?>
    </div>
</div>
