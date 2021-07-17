<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index panel panel-info">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                    <h3>35</h3>
                    <p>Gejala</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-stethoscope"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                    <h3>8</h3>
                    <p>Diagnosa</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-flask"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                    <h3>41</h3>
                    <p>Hasil Konsultasi</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-clipboard"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                    <h3>9</h3>
                    <p>Konsultasi</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    <div class="body-content panel-body">
        <h1 class="display-4">Selamat Datang!</h1>

        <p class="lead">HEALTHY-MOUTH(Sistem Pakar Diagnosa Penyakit Mulut dengan Metode Certainty Factor).</p>
        <?= Html::a('<i class="fa fa-shield"></i><span class="hide-menu"> Dashboard </span>', ['/site/index'], ['class'=>'btn btn-primary waves-effect waves-light']) ?>
           
        <div class="row">
            <div class="col-lg-4">
                <h2>Diagnosa</h2>

                <p>Terdapat 8 diagnosa pada HEALTHY-MOUTH yaitu Per Akut, Akut, Sub Akut, dan Kronis merupakan tingkat keparahan dalam pada penderita penyakit mulut.</p>

                <p><a class="btn btn-default" href="#">Manajemen Diagnosa &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Gejala</h2>

                <p>HEALTHY-MOUTH memiliki 35 gejala dalam menentukan diagnosa terhadap penyakit mulut.</p>

                <p><a class="btn btn-default" href="#">Manajemen Gejala &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Pakar</h2>

                <p>Sistem ini meniru seorang pakar yaitu Dokter Gigi & Mulut dalam mendiagnosis penyakit mulut.</p>

                <p><a class="btn btn-default" href="#">Manajemen Pakar &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
