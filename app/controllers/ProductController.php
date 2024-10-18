<?php

require_once "app/models/ProductModel.php";
require_once "app/views/ProductView.php";

class ProductController { //objeto 

    private $model; // propiedades privadas
    private $view;

    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }
     public function mostrarproducto($id){
     
      $producto =$this->model->traerproducto($id);

        if($producto){
            $this-> view->mostrarproducto($producto);
        }
        else {
            header('Location: ' . BASE_URL . 'home');
        }
     }
}