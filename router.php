<?php
    require_once "app/controllers/GeneralController.php";
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/'); 
    
    if (empty($_GET['action'])) { 
        $_GET['action'] = 'home';
    } 

    $accion = $_GET['action']; $parametros = explode('/', $accion); 

    switch ($parametros[0]) { 
        case 'home' :
            $controller = new GeneralController();
            $controller->mostrarInicio();
        break;

        default: 
        break; 
    }