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
include "../../vendor/autoload.php";


/*
|--------------------------------------------------------------------------
| 实例化
|--------------------------------------------------------------------------
*/
$app = new App\app();

/*
|--------------------------------------------------------------------------
| go
|--------------------------------------------------------------------------
*/
$app->run();

