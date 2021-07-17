<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DiagnosaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MANAJEMEN DIAGNOSA';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-index panel panel-info">
    <div class="panel-heading">
        <h4>
            <?= Html::encode($this->title) ?>
            <span class="pull-right">
                <?= Html::a('Tambah Diagnosa', ['create'], ['class' => 'btn btn-success btn-sm waves-effect waves-light']) ?>
            </span>
        </h4>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'layout' => '{items}{pager}',
            'options' => ['class' => 'full-color-table full-muted-table hover-table'],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'kode_diagnosa',
                'nama_diagnosa',
                'solusi:ntext',

                //['class' => 'yii\grid\ActionColumn'],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Menu',
                    'template' => '{leadUpdate} {leadDelete}',
                    'buttons' => [
                        'leadUpdate' => function($url, $model) {
                            $url = Url::to(['update', 'id' => $model->kode_diagnosa]);
                            return Html::a('<span class="fa fa-pencil"></span>', $url, ['class' => 'btn btn-warning']);
                        },
                        'leadDelete' => function($url, $model) {
                            $url = Url::to(['delete', 'id' => $model->kode_diagnosa]);
                            return Html::a('<span class="fa fa-trash"></span>', $url, [
                                'title' => 'delete',
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this data ?'),
                                'data-method' => 'post',
                                'class' => 'btn btn-danger',
                            ]);
                        },
                    ] 
                ]
            ],
        ]); ?>
    </div>
</div>
