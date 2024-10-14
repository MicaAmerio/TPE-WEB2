<?php

require_once "app/models/usuarioModel.php";
require_once "app/models/ProductModel.php";
require_once "app/views/usuarioView.php";
require_once "app/views/GeneralView.php";


class usuariosController{
     
    private $model;
    private $view;
    private $GeneralView;
    private $productmodel;

    public function __construct(){
        $this->model = new usuarioModel();
        $this->productmodel = new ProductModel();
        $this->view = new usuarioView();
        $this->GeneralView = new GeneralView();
    }
    public function mostrarlogin(){
      $this->view->mostrarlogin();
    }
    
    public function login(){
      $usuario = $_POST['usuario'];
      $password = $_POST['password'];

      //1. Chequear que el usuario existe en nuestra BBDD
      $buscarusuario = $this->model->buscarUsuario($usuario); 

      if(!$buscarusuario){
        return var_dump("No se encontro ese usuario");
      }

      if($usuario == "" || $password == ""){
        return var_dump("Campos vacios");
      }

      //2. Chequear si las contraseñas coinciden
      if(password_verify($password, $buscarusuario->contraseña)){
        //3.si coninciden, abrimos la sesion
        if (session_status() != PHP_SESSION_ACTIVE){
          session_start();
          $_SESSION['IS_LOGGED'] = true; //guardar que esta logueado
          $_SESSION['ID_USER'] = $buscarusuario->id;  //guardo el id
          $_SESSION['USER'] = $buscarusuario->usuario; //guardo el nombre del usuario
          $_SESSION['IS_ADMIN'] = $buscarusuario->es_admin; //si tiene permiso o no
        }
        
        if($_SESSION['IS_ADMIN'] == true){
          header("Location: " . BASE_URL . 'administrador');
        }
        else{
          header("Location: " . BASE_URL . 'home');
        }

      }
    }
}