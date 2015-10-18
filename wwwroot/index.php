<?php
include "../vendor/autoload.php";
//$excel = new PHPExcel();
//var_dump($excel);

//lib autoload
//$OrderManager = new OrderManager();
//$OrderManager->test();
//var_dump($OrderManager);

//psr-0 autoload
//$OrderManager = new SilkLib\OrderManager();
//$OrderManager->test();
//var_dump($OrderManager);


//psr-4 autoload
$OrderManager = new App\test();
$OrderManager->dos();
var_dump($OrderManager);
