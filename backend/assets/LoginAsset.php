<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'AdminLTE/bower_components/font-awesome/css/font-awesome.min.css',
        'AdminLTE/bower_components/Ionicons/css/ionicons.min.css',
        'AdminLTE/dist/css/AdminLTE.min.css',
        'AdminLTE/dist/css/skins/_all-skins.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    public $js = [
        'AdminLTE/bower_components/jquery/dist/jquery.min.js',
        'AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'AdminLTE/bower_components/fastclick/lib/fastclick.js',
        'AdminLTE/dist/js/adminlte.min.js',
        'AdminLTE/dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}
