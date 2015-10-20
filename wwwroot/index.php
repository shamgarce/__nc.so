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
use App\F;


$req = new Sham\Request() ;

$get = $req->get();       //GET????
$path1 = $req->getPath(); //path????
$path2 = $req->getPath()->toArray();

echo '<pre>';
print_r($get);
echo $path1;
print_r($path2);
echo '</pre>';

//$req = new Request();
//

















exit;






$url = Url::createFromUrl(
    'http://user:pass@www.example.com:81/path/index.php?query=toto+le+heros#top'
);
//
//let update the Query String
$query = $url->getQuery();

F::D($query);


$query->modify(array('query' => "lulu l'allumeuse", "foo" => "bar"));
$query['sarah'] = "o connors"; //adding a new parameter

$url->setScheme('ftp'); //change the URLs scheme
$url->setFragment(null); //remove the fragment
$url->setPort(21);
$url->getPath()->remove('path/index.php'); //remove part of the path
$url->getPath()->prepend('mongo db'); //prepend the path
echo $url, PHP_EOL;
// output ftp://user:pass@www.example.com:21/mongo%20db?query=lulu%20l%27allumeuse&foo=bar&sarah=o%20connors



exit;
















































use Pux\Mux;
use Pux\RouteExecutor;



use Universal\Http\HttpRequest;



$url='http://www.phpernote.com/ad.php?id=325&action=index&page=3';
$url='http://www.phpernote.com/ad/asdf/asdf/asdf/?id=325&action=index&page=3';

//echo $_SERVER['REQUEST_URI'].'<br>';

$urlarr=parse_url($url);
//echo $urlarr['query'];
parse_str($urlarr['query'],$parr);
//print_r($urlarr);
//print_r($parr);

$req = new HttpRequest($parr);
$req->cookieParameters = $_COOKIE;
F::D($_SERVER);
$req->serverParameters = $_SERVER;

//foreach( $req->files as $f ) {
//    $extname = $f->getExtension();
//    $filename = $f->getPathname();
//}

echo $req->param( 'username' );   // get $_REQUEST['username'];

echo $req->get->username;    // get $_GET['username'];

echo $req->post->username;   // get $_POST['username'];

echo $req->server->path_info;  // get $_SERVER['path_info'];

F::D($req->post);
F::D($req);
exit;









/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
https://github.com/c9s/Pux
*/





$req = new Universal\Http\HttpRequest();
$v = $req->get->varname;
F::D($req);

/* $req = new HttpRequest;
* $v = $req->get->varname;
* $b = $req->post->varname;
*
* $username = $req->param('username');
*
* $req->files->uploaded->name;
* $req->files->uploaded->size;
* $req->files->uploaded->tmp_name;
* $req->files->uploaded->error;
*/
exit;


class HelloController {
    public function helloAction() {
        return 'hello';
    }
}

$mux = require '../App/test/router.php';
$mux->sort();

$route = $mux->dispatch($_SERVER['REQUEST_URI']);
if($route){
    F::D(RouteExecutor::execute($route));
}else{
    echo 123;       //Ã»ÓÐÆ¥ÅäÉÏ
}

exit;














class Controller {
    public function helloAction() {
        return 'product list';
    }
    public function itemAction($id=0) {
        return "product $id";
    }
    public function expand($id=0) {
        return "product $id";
    }

}


class ProductController extends Controller
{
    // translate to path ""
    public function indexAction() { }

    // translate to path "/add"
    public function addAction() { }

    // translate to path "/del"
    public function delAction() { }
}

$mux = new Mux;
$submux = $controller->expand();
$mux->mount( '/product' , $submux );

// or even simpler
$mux->mount( '/product' , $controller);

$mux->dispatch('/product');       // ProductController->indexAction
$mux->dispatch('/product/add');   // ProductController->addAction
$mux->dispatch('/product/del');   // ProductController->delAction



exit;








class HelloController {
    public function helloAction() {
        return 'product list';
    }
    public function itemAction($id=0) {
        return "product $id";
    }
}

$mux = new Mux;

$mux->add('/hello', ['\abc\HelloController','helloAction']);
$mux->add('/hello1', ['\abc\HelloController','itemAction']);
$mux->sort();
//var_dump($mux->getRoutes());
$route = $mux->dispatch($_SERVER['REQUEST_URI']);
F::D($route);
//\App\F::D("Response: %s\n", RouteExecutor::execute($route));
F::D(RouteExecutor::execute($route));


//F::D("Response: %s\n", RouteExecutor::execute($route));
