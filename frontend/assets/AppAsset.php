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
        'css/site.css',
        'theme/css/style.css',
        'theme/css/animate.css',
        'theme/css/bootstrap.min.css',
        'theme/css/metisMenu.min.css',
        'theme/css/shortcode.css',
        'theme/css/owl.carousel.min.css',
    ];
    public $js = [
        'theme/js/scripts.js',
        'theme/js/jquery.counterup.min.js',
        'theme/js/morris.min.js',
        'theme/js/gmap.counterup.min.js',
        'theme/js/owl.carousel.min.js',
        'theme/js/raphael-min.js',
        'theme/js/waypoints.min.js',
        'theme/js/common.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
