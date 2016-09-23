<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/js/iCheck/skins/minimal/minimal.css',
        'assets/js/iCheck/skins/square/square.css',
        'assets/js/iCheck/skins/square/red.css',
        'assets/js/iCheck/skins/square/blue.css',
        'assets/css/clndr.css',
        'assets/js/morris-chart/morris.css',
        'assets/css/style.css',
        'assets/css/style-responsive.css',
    ];
    public $js = [
     /*   'assets/js/jquery-ui-1.9.2.custom.min.js',
        'assets/js/jquery-migrate-1.2.1.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/modernizr.min.js',
        'assets/js/jquery.nicescroll.js',
        'assets/js/easypiechart/jquery.easypiechart.js',
        'assets/js/easypiechart/easypiechart-init.js',
        'assets/js/sparkline/jquery.sparkline.js',
        'assets/js/sparkline/sparkline-init.js',
        'assets/js/iCheck/jquery.icheck.js',
        'assets/js/icheck-init.js',
        'assets/js/flot-chart/jquery.flot.js',
        'assets/js/flot-chart/jquery.flot.tooltip.js',
        'assets/js/flot-chart/jquery.flot.resize.js',
        'assets/js/morris-chart/morris.js',
        'assets/js/morris-chart/raphael-min.js',
        'assets/js/calendar/clndr.js',
        'assets/js/calendar/evnt.calendar.init.js',
        'assets/js/calendar/moment-2.2.1.js',
        'http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js',
        'assets/js/scripts.js',
        'assets/js/dashboard-chart-init.js'*/
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
