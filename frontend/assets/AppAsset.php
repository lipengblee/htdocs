<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/style.css',
        'css/magnific-popup.css',
    ];
    public $js = [
        'js/simpleCart.min.js',
        'js/jquery.min.js',
        'js/jquery.easydropdown.js',
        'js/jquery.magnific-popup.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
