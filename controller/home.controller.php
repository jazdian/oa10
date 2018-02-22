<?php
require_once PATH_CTRLS . '/MSNav.php';

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

    public function CreateNavBar()
	{
		$mynav = new MSNav();
		return $mynav->NavBar();
	}

}

$home = new Home();
require_once PATH_VIEW . '/home.php';
