<?php
namespace abc;

use Pux\Mux;
use Pux\RouteExecutor;

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

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
https://github.com/c9s/Pux
*/

class HelloController {
    public function helloAction() {
        return 'product list';
    }
    public function itemAction($id) {
        return "product $id";
    }
}

$mux = new Mux;
$mux->add('/hello', ['\abc\HelloController','helloAction']);
$mux->add('/hello2', ['\abc\HelloController','helloAction']);
$mux->add('/hello3', ['\abc\HelloController','helloAction']);
$mux->add('/hello4', ['\abc\HelloController','helloAction']);
$mux->add('/hello5', ['\abc\HelloController','helloAction']);

var_dump($mux->getRoutes());
$route = $mux->dispatch($_SERVER['REQUEST_URI']);

printf("Response: %s\n", RouteExecutor::execute($route));
