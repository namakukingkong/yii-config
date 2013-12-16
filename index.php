<?php


if(!file_exists(dirname(__FILE__).'/assets')) {
    mkdir('assets');
    @chmod(dirname(__FILE__).'/assets', 0777);
}

if(!file_exists(dirname(__FILE__).'/protected/runtime')) {
    mkdir(dirname(__FILE__).'/protected/runtime');
    @chmod(dirname(__FILE__).'/protected/runtime', 0777);
}

if(!file_exists(dirname(__FILE__).'/assets')) {
        echo "File tidak bisa dibuat secara otomatis oleh system, Anda harus membuatnya sendiri '/assets' "."<br/>";
}
if(!file_exists(dirname(__FILE__).'/protected/runtime')) {
        echo "File tidak bisa dibuat secara otomatis oleh system, Anda harus membuatnya sendiri '/protected/runtime' "."<br/>";
}

date_default_timezone_set('Asia/Jakarta');
// change the following paths if necessary
$yii = dirname(__FILE__) . '/../yii-1.1.14/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/common.php';
if ($_SERVER["HTTP_HOST"] == 'localhost' || $_SERVER["HTTP_HOST"] == '127.0.0.1') {
    error_reporting(E_ALL | E_STRICT);
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
}else{
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED | E_STRICT);
}
ob_start();
require_once($yii);
Yii::createWebApplication($config)->run();