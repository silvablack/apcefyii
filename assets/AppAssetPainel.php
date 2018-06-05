<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetPainel extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'sbadmin2/vendor/bootstrap/css/bootstrap.min.css',
        'sbadmin2/vendor/metisMenu/metisMenu.min.css',
        'sbadmin2/dist/css/sb-admin-2.css',
        'sbadmin2/vendor/morrisjs/morris.css',
        'sbadmin2/vendor/font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
      'sbadmin2/vendor/jquery/jquery.min.js',
      'sbadmin2/vendor/bootstrap/js/bootstrap.min.js',
      'sbadmin2/vendor/metisMenu/metisMenu.min.js',
      'sbadmin2/vendor/raphael/raphael.min.js',
      'sbadmin2/vendor/morrisjs/morris.min.js',
      'sbadmin2/data/morris-data.js',
      'sbadmin2/dist/js/sb-admin-2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
