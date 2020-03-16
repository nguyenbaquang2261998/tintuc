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
        // '/themes/lib/select2/select2.min.css',
        // '/themes/css/theme.css',
        // '/themes/css/style.css',
        // '/common/css/emojionearea.min.css',
        // '/themes/lib/fancybox/jquery.fancybox.min.css',
        // '/themes/lib/plyr/plyr.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
