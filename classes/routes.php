<?php

require_once PATH_CLAS . '/Router.php';
require_once PATH_CLAS . '/Route.php';

$router = new Router($_SERVER['REQUEST_URI']);

$router->add('/oa10/', function () {

    require_once PATH_ROOT . '/controller/home.controller.php';
});
