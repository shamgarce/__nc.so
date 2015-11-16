<?php
/**
 * Grace - A PHP Framework For Web Artisans
 */
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
include "../vendor/autoload.php";


//��ʼ��
$wise = wise\wise::getInstance([
    'ini' => [
        'username'    => '',
        'dbhost'        => '125.0.0.1',
    ],
    'file'=>[
        'Config'    => 'Config/Config.php',
        'db'        => 'Config/db.php',
    ],
]);

//����
$wise->load('db2','Config/Config.php');

//���ò���
$wise->C('myinfo',[]);
$wise->C('myinfo','--');

//����2
$md = $wise('myinfo');
print_r($wise->C());

echo 1231;