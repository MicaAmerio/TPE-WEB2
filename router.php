<?php
    require_once "app/controllers/GeneralController.php"; //incructar codigo php de otro archivo
    require_once "app/controllers/ProductController.php";
    require_once "app/controllers/CategoriasController.php";
    require_once "app/controllers/ABMProductoController.php";
    require_once "app/controllers/usuariosController.php";

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
            if(isset($parametros[1])){
                $controller= new ProductController();
                $controller->mostrarproducto($parametros[1]); // producto/:ID
            }
        break;
        
        case "categoria" :
            if(isset($parametros[1])){
                $controller= new CategoriasController();
                $controller->mostrarCategoria($parametros[1]);
            }
        break;

        case "administrador":
            $controller = new ABMProductoController();
            $controller->mostrarPanel();
        break;

        case "administrar-productos":
            $controller= new ABMProductoController();
            $controller->mostrarlista();
        break;

        case "eliminar-producto":
            $controller = new ABMProductoController();
            $controller->eliminar($parametros[1]);
        break;
        case "login":
            $controller= new usuariosController();
            $controller->mostrarlogin();
        break;
        case "login_usuario":
            $controller =new usuariosController();
            $controller-> login();
        break;

        default: 
        break; 
        
      }
    