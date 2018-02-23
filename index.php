<?php session_start();

# Constantes del  Sistema...
require_once $_SERVER['DOCUMENT_ROOT'] . '/oa10/classes/config.php';


// Procesos antes de cargar la pagina principal...


// Llamado a la página principal del sistema donde todo el contenido sera inyectado...
require_once PATH_CLLER . '/home.controller.php';
