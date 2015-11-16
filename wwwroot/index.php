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




# Get Markdown class
use \Michelf\Markdown;

# Read file and pass content through the Markdown parser
$text = file_get_contents('../README.md');
$html = Markdown::defaultTransform($text);

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Markdown Lib - Readme</title>
    <script type="text/javascript" src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js" charset="UTF-8"></script>

<!--    
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css">
-->
  <link href="http://cdn.bootcss.com/highlight.js/8.0/styles/monokai_sublime.min.css" rel="stylesheet">  
  <link href="http://cdn.bootcss.com/bootstrap-markdown/2.9.0/css/bootstrap-markdown.min.css" rel="stylesheet">  
  
  
    <link href="./markdown.css" rel="stylesheet">  
  
  
  
    <script src="http://cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>  
    
	  <link href="/assets/as_doc/style-api-v2-cbb8772a.css" rel="stylesheet" type="text/css" />
	  <link href="/assets/as_doc/pikabu-22255a87.css" rel="stylesheet" type="text/css" />
	  <link href="/assets/as_doc/mobile-menu-be990f4f.css" rel="stylesheet" type="text/css" />    
    
    
    
</head>
<body>

<pre><code>

    ```html
    import Foundation

    @objc class Person: Entity {
      var name: String!
      var age:  Int!
    
      init(name: String, age: Int) {
        /* /* ... */ */
      }
    
      // Return a descriptive string for this person
      func description(offset: Int = 0) -> String {
        return "\(name) is \(age + offset) years old"
      }
    }

    ```

</code></pre>


<pre><code>
    public static function getInstance($refresh = false)
    {
        if (is_null(self::$environment) || $refresh) {
            self::$environment = new self();
        }
        return self::$environment;
    }
</code></pre>


<?php
# Put HTML content in the document
echo $html;
?>




  <script >
	$(document).ready(function()
	{	
		hljs.initHighlightingOnLoad();
	})
  
  </script>  


</body>
</html>
<?php
exit;

use Pux\Mux;
use Pux\RouteExecutor;




class HelloController {
    public function helloAction() {
        return 'product list';
    }
    public function itemAction($id=0) {
        return "product $id";
    }
}

$mux = new Mux;

//$mux->add('/hello', ['\HelloController','helloAction']);
//$mux->add('/hello1', ['\HelloController','itemAction']);
$mux->get('/hello1', ['\HelloController','itemAction']);
//$mux->post('/product/:id', ['ProductController','updateAction'] , [
//    'require' => [ 'id' => '\d+', ],
//    'default' => [ 'id' => '1', ]
//]);


$mux->sort();
print_r($mux->getRoutes());

$route = $mux->dispatch($_SERVER['REQUEST_URI']);
//print_r($route);
//print_r($mux);

//\App\F::D("Response: %s\n", RouteExecutor::execute($route));
print_r(RouteExecutor::execute($route));







exit;




















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










//F::D("Response: %s\n", RouteExecutor::execute($route));
