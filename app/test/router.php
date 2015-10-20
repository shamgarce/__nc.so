<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/19 0019
 * Time: 11:26
 */

use Pux\Mux;
$mux = new Mux;




//
//
//
//
//
//$mux->add('/hello', ['\HelloController','helloAction']);
//$mux->any('/hello123/:id', ['\HelloController','helloAction']);
//
//
//$mux->any('/product', ['ProductController','listAction']);
//$mux->get('/product/:id', ['ProductController','itemAction'] , [
//    'require' => [ 'id' => '\d+', ],
//    'default' => [ 'id' => '1', ]
//]);
//$mux->post('/product/:id', ['ProductController','updateAction'] , [
//    'require' => [ 'id' => '\d+', ],
//    'default' => [ 'id' => '1', ]
//]);
//$mux->delete('/product/:id', ['ProductController','deleteAction'] , [
//    'require' => [ 'id' => '\d+', ],
//    'default' => [ 'id' => '1', ]
//]);
//
//


class ProductController extends \Pux\Controller
{
      // translate to path ""
      public function indexAction() { }

      // translate to path "/add"
      public function addAction() { }

      // translate to path "/del"
      public function delAction() { }
}


$submux = 'Action';
$mux->mount( '/product' , $submux );
// or even simpler
$mux->mount( '/product' , ['ProductController','deleteAction'] );









return $mux;
