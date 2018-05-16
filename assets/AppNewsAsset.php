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
class AppNewsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap/bootstrap.min.css',
        'css/main.css',
        'css/icomoon.css',
        'css/animate.css',
        'css/transition.css',
        'css/font-awesome.min.css',
        'css/style.css',
        'css/color.css',
        'css/responsive.css',
        "css/slick.css",
        "css/slick-theme.css",
    ];
    public $js = [
      'js/vendor/modernizr.js',
      'js/vendor/jquery.js',
      'js/vendor/bootstrap.min.js',
      'js/gmap3.min.js',
      'js/bigslide.js',
      'js/slick.js',
      'js/waterwheelCarousel.js',
      'js/contact-form.js',
      'js/countTo.js',
      'js/datepicker.js',
      'js/rating-star.js',
      'js/range-slider.js',
      'js/spinner.js',
      'js/parallax.js',
      'js/countdown.js',
      'js/appear.js',
      'js/prettyPhoto.js',
      'js/wow-min.js',
      'js/main.js',
      'js/slick.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
