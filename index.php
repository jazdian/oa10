<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/oa10/classes/config.php';

require_once PATH_CLAS . '/Router.php';
require_once PATH_CLAS . '/Route.php';

require_once PATH_CLLER . '/ProductsController.php';

$router = new Router($_SERVER['REQUEST_URI']);

/*

echo __DIR__;
echo '<br>';
echo __FILE__;
echo PATH_CTRLS;
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo __DIR__;
var_dump($_SERVER);

*/

$router->add('/oa10/', function ()
{
	require_once PATH_ROOT . '/controller/home.controller.php';

	//return '<h1>Home</h1>';
});

//$router->add('/oa10/productos', 'ProductsController::index');
// $router->add('/oa10/productos/:name', 'ProductsController::show');
//$router->add('/oa10/homes', 'ProductsController::homes');
// // /ruta/con/un/monton/de/parametros
// $router->add('/oa10/:a/:b/:c/:d/:e/:f', function ($a, $b, $c, $d, $e, $f)
// {
// 	return "$a<br>$b<br>$c<br>$d<br>$e<br>$f";
// });

$router->run();

//require_once PATH_ROOT . '/controller/home.controller.php';

//var_dump($_GET);
