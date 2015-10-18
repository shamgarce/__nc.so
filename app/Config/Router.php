<?php
//    $r->addRoute('GET', '/user/{id:\d+}', 'handler1');
$r->addRoute('GET', '/user/{id:\d+}/{name}', 'common_handler');
//    // Or alternatively
$r->addRoute('GET', '/user/{id:\d+}[/{name}]', 'common_handler');