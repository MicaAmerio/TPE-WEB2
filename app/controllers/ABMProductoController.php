<?php

require_once "app/models/ProductModel.php";
require_once "app/views/ProductView.php";
require_once "app/views/GeneralView.php";
 
 class ABMProductoController{
 
    private $model; // propiedades privadas
    private $view;
    private $viewGeneral;

    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->viewGeneral = new GeneralView();
        //Agregar barrera solo para administradores
        $this->chequearSiEsAdministrador();
      }
      public function mostrarlista(){
         $productos=$this->model->traertodos();
         $this->view->mostrarlista($productos);
      }

      private function chequearSiEsAdministrador(){
         if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
         }
         if (!isset($_SESSION['IS_LOGGED'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
         } else if (isset($_SESSION['IS_LOGGED']) && ($_SESSION ['IS_ADMIN']!=1)){
            header('Location: ' . BASE_URL . 'login');
            die();
         }
      }

      public function mostrarPanel(){
         $this->viewGeneral->mostrarPanel();
     }

      
 }