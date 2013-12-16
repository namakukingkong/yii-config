<?php
/**
 * Setingan
 */
if ($_SERVER["HTTP_HOST"] == 'localhost' || $_SERVER["HTTP_HOST"] == '127.0.0.1' || $_SERVER["HTTP_HOST"] == 'lvh.me' ) {
    // nek pas local (staging)
    $database = '/database-dev.php';
}else{
    // nek pas online (production)
    $database = '/database.php';
}
// mik nek butuh Helpers, iki isine mik function2 php biasa (no class)
require_once( dirname(__FILE__) . '/../components/Helpers.php');
// iki magic e
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    require(dirname(__FILE__).$database),
    require(dirname(__FILE__).'/route.php'),
    require(dirname(__FILE__).'/extensions.php'),
    require(dirname(__FILE__).'/params.php')
);
?>
