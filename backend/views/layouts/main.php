<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->beginBody() ?>

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="AdminLTE/dist/img/user7-128x128.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Santi Rahayu</span>
                </a>
                <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="AdminLTE/dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">

                    <p>
                    Santi Rahayu - Web Developer
                    <small>Member since 2017</small>
                    </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                    <div class="row">
                    <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                    </div>
                    </div>
                    <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                    <?= Html::a('Sign Out', ['logout'], ['data-method' => 'post', 'class' => "btn btn-default btn-flat"]) ?>
                    </div>
                </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
            </ul>
        </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
            <img src="AdminLTE/dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
            <p>Santi Rahayu</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <?= Html::a('<i class="fa fa-dashboard"></i><span class="hide-menu">Dashboard </span>', ['/site/index']) ?>
            </li>
            <li class="treeview">
                <?= Html::a('<i class="fa fa-stethoscope"></i><span class="hide-menu">Gejala </span>', ['/gejala/index']) ?>
            </li>
            <li class="treeview">
                <?= Html::a('<i class="fa fa-flask"></i><span class="hide-menu">Diagnosa </span>', ['/diagnosa/index']) ?>
            </li>
            <li class="treeview">
                <?= Html::a('<i class="fa fa-random"></i><span class="hide-menu">Pakar </span>', ['/pakar/index']) ?>
            </li>
            <li class="treeview">
                <?= Html::a('<i class="fa fa-medkit"></i><span class="hide-menu">Konsultasi </span>', ['/konsultasi/index']) ?>
            </li>
            <li class="treeview">
                <?= Html::a('<i class="fa fa-clipboard"></i><span class="hide-menu">Hasil Konsultasi </span>', ['/hasil-konsultasi/index']) ?>
            </li>
        </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <main role="main" class="flex-shrink-0">
        <div class="content-wrapper">
            <div class="content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
    </footer>

<?php $this->endBody() ?>
</div>
</body>
</html>
<?php $this->endPage();
