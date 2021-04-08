<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    	/**
    	* Bucket Admin Assets
    	**/
    	'assets/bucket_admin/bs3/css/bootstrap.min.css',
		'assets/bucket_admin/css/bootstrap-reset.css',
		'assets/bucket_admin/font-awesome/css/font-awesome.css',
		'assets/bucket_admin/css/style.css',
		'assets/bucket_admin/css/style-responsive.css',

    ];
    public $js = [
	    /**
		* Bucket Admin Assets
		**/
	    'assets/bucket_admin/js/jquery.js',
		'assets/bucket_admin/bs3/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
