<?php

require_once PATH_CTRLS . '/MSNav.php';
require_once PATH_CTRLS . '/MSFooter.php';

require_once PATH_CLAS . '/Router.php';
require_once PATH_CLAS . '/Route.php';


/**
 * Clase del home
 */
class Home
{

    /**
     * summary
     */
    public function __construct()
    {
    }

    public function RouterOutlet()
    {
        $router = new Router($_SERVER['REQUEST_URI']);

        $router->add('/oa10', function () {

            require_once PATH_VIEW . '/web/page.php';
        });

        $router->add('/oa10/clientes', function () {

            require_once PATH_CLLER . '/clientes.controller.php';
        });
        
        $router->add('/oa10/login', function () {

            require_once PATH_CLLER . '/login.controller.php';
        });
        

        $router->Run();
    }

    public function CreateNavBar()
    {
        $mynav = new MSNav();
        $mynav->SetClass("blue darken-4");
        return $mynav->NavBar();
    }

    public function CreateFooter()
    {
        $myfoot = new MSFooter();
        return $myfoot->Footer();
    }


}

$home = new Home();
require_once PATH_VIEW . '/home.php';
