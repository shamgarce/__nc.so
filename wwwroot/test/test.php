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


//$url = \Purl\Url::parse('http://jwage.com')
//    ->set('scheme', 'https')
//    ->set('port', '443')
//    ->set('user', 'jwage')
//    ->set('pass', 'password')
//    ->set('path', 'about/me')
//    ->set('query', 'param1=value1&param2=value2')
//    ->set('fragment', 'about/me?param1=value1&param2=value2');
//


//$browsurl =  'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

//echo'<br>http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
//
//
//$pathinfo = @parse_url($_SERVER['REQUEST_URI']);
//print_r($pathinfo);
//
//exit;
//

$url = new \Purl\Url($_SERVER['HTTP_HOST']);
$url->fragment = $_SERVER['REQUEST_URI'];

//$url = \Purl\Url::parse($browsurl);

echo '<br>'.$url->getUrl();
echo '<br>'.$url->getQuery();
echo '<br>'.$url->getPath();
//print_r($url->getParser()) ;
echo '<br>'.$url->getNetloc();
echo '--';

echo '<br>'.$url->fragment->path;
echo '<br>'.$url->fragment->query;

echo '<br>'.$url->get('er');



exit;
print_r($url);



// https://jwage:password@jwage.com:443/about/me?param1=value1&param2=value2#about/me?param1=value1&param2=value2

// $url->path becomes instanceof Purl\Path
// $url->query becomes instanceof Purl\Query
// $url->fragment becomes instanceof Purl\Fragment








////$excel = new PHPExcel();
////var_dump($excel);
//
////lib autoload
////$OrderManager = new OrderManager();
////$OrderManager->test();
////var_dump($OrderManager);
//
////psr-0 autoload
////$OrderManager = new SilkLib\OrderManager();
////$OrderManager->test();
////var_dump($OrderManager);
//
//
////psr-4 autoload
//$OrderManager = new App\test();
//$OrderManager->dos();
//var_dump($OrderManager);
