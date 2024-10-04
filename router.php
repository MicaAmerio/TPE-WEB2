<?php
    require_once "app/controllers/GeneralController.php";
    require_once "app/controllers/ProductController.php";
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

        case "producto" :
                $controller= new ProductController();
                $controller->mostrarproducto($parametros[1]); // producto/:ID
        break;

        default: 
        break; 
    }