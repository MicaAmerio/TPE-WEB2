<?php
    require_once "app/controllers/GeneralController.php"; //incructar codigo php de otro archivo
    require_once "app/controllers/ProductController.php";
    require_once "app/controllers/ABMProductoController.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/'); //constante se usa para generar automáticamente la URL base de una aplicación web, de forma dinámica,
    
    if (empty($_GET['action'])) { 
        $_GET['action'] = 'home';
    } //si esta vacio que abra el home

    $accion = $_GET['action']; $parametros = explode('/', $accion); // obtiene un parámetro de la URL y lo divide en partes utilizando el carácter /

    switch ($parametros[0]) { 
        case 'home' :
            $controller = new GeneralController();// PHP está creando un objeto de la clase GeneralController y lo está almacenando en la variable $controller.
            $controller->mostrarInicio();
        break;

        case "producto" :
                $controller= new ProductController();
                $controller->mostrarproducto($parametros[1]); // producto/:ID
        break;

        case "administrador":
            if($parametros[1] == 'productos'){
            $controller= new ABMProductoController();
            $controller->mostrarlista();
            }
        default: 
        break; 
      }
    