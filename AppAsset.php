<?php
/**
 * @author Evgeniy Bobrov <yujin1st@gmail.com>
 * @link http://yujin1st.ru
 */

namespace yujin1st\materialtheme;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
  public $sourcePath = '@yujin1st/unifytheme/assets';

  public $css = [
    'plugins/bootstrap/css/bootstrap.min.css',
    'css/style.css',
    'css/headers/header-default.css',
    'css/footers/footer-v1.css',
    'css/theme-colors/default.css',
  ];

  public $js = [
    'bower_components/jquery-scrollLock/jquery-scrollLock.min.js',
    'js/app.min.js',
  ];

  public $depends = [
    // 'yii\bootstrap\BootstrapPluginAsset',
    // 'yii\web\YiiAsset',
  ];
}
