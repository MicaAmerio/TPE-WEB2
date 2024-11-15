<?php

require_once "app/models/CategoriasModel.php";
require_once "app/views/CategoriaView.php";


 
 class ABMCategoriaController{
 
    private $model; // propiedades privadas
    private $view;

    public function __construct(){
        $this->model = new CategoriasModel();
        $this->view = new CategoriaView();
        
   


        //Agregar barrera solo para administradores
        //$this->chequearSiEsAdministrador();
      }

      public function administarCategorias(){
         $categorias=$this->model->traerTodas();
         $this->view->administrarCategorias($categorias);
      }


      public function mostrarFormularioParaAgregar(){
        $this->view->mostrarFormularioParaAgregar();
      }

      public function agregarCategoria() {  //Form con ruta: /categoria-agregada
        $nombre = $_POST["nombre"]; //name="nombre";
        $descripcion = $_POST["descripcion"];

        //1.Mandamos los datos al modelo
        $this->model->agregarCategoria($nombre, $descripcion);
        header('Location: ' . BASE_URL . 'administrar-categorias');
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

      //public function mostrarPanel(){
       //  $this->viewGeneral->mostrarPanel();
       
     
      public function eliminar($id){
         $this->model->eliminar($id);
         header("Location: " . BASE_URL . 'administrar-categorias');
      }
      public function formeditarcategoria($id){
         $categoria=$this->model->traerCategoriaParaEditar($id);
         $this->view->formularioeditarcategoria($categoria);
      }
      public function editarcategoria(){
         $categoria= $_POST['id_categoria'];
         $nombre = $_POST['nombre'];
         $descripcion=$_POST['descripcion'];
 
         //Envío datos al modelo
         $this->model->editcategoria($categoria,$nombre,$descripcion);  
         header('Location: ' . BASE_URL . 'administrar-categorias');


      
 
        }

      
 } 