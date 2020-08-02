<?php
    // error_reporting(0);

    require_once(dirname(__FILE__, 2) . '/src/config/config.php');
    
    $uri = urldecode(
        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if ($uri === '/' || $uri === '' || $uri === '/index.php') {
        $uri = '/login.php';
    }

    require_once(CONTROLLER_PATH . "/{$uri}");



    // mysqli_connect("innout", "root", "mysql@2020*") or die (mysqli_error());
    // echo "Conneted to MySql Server";

    
    

    // if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    //     echo 'We don\'t have mysqli!!!';
    // } else {
    //     echo 'Phew we have it!';
    // }
    
    // phpinfo();
    
?>