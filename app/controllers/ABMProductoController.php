<?php

require_once "app/models/ProductModel.php";
//require_once "app/models/CategModel.php";
require_once "app/views/ProductView.php";
require_once "app/views/GeneralView.php";
 
 class ABMProductoController{
 
    private $model; // propiedades privadas
    //private $categModel;
    private $view;
    private $viewGeneral;

    public function __construct(){
        $this->model = new ProductModel();
        //$this->categModel = new CategModel();
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

      public function eliminar($id){
         $this->model->eliminar($id);
         header("Location: " . BASE_URL . 'administrar-productos');
      }

      public function mostrarFormularioParaAgregar(){
         $categorias = $this->model->traerCategorias();
         $this->view->mostrarFormularioParaAgregarProducto($categorias);
      }

      public function agregarProducto(){

         $nombre = $_REQUEST['nombre'];
         $marca = $_REQUEST["marca"];
         $capacidad = $_REQUEST["capacidad"];
         $precio =$_REQUEST["precio"];
         $descripcion = $_REQUEST["descripcion"];
         $id_categoria = $_REQUEST["id_categoria"];

         $this->model->agregarProducto($nombre,$marca,$capacidad,$precio,$descripcion, $id_categoria);

         //Redirección
         header('Location: ' . BASE_URL . 'home');

      }
      public function formeditarproducto($id){
         $producto=$this->model->traerParaeditar($id);
         //$categoria=$this->categModel->traerTodasCategorias();
         $this->view->formularioeditarproducto($producto);

      }
      

      
 }