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

           $nombre= $_POST("webadmin");
           $contraseña=$_POST("admin");
        

           if($nombre ===""|| $contraseña===""){
                $productos = $this->productmodel->traerTodos();
                $this->GeneralView->mostrarInicio($productos);
           }

         }
}