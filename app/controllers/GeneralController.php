<?php

require_once "app/models/ProductModel.php";
require_once "app/models/CategoriasModel.php";
require_once "app/views/GeneralView.php";

class GeneralController { 

    //Usa los dos modelos
    private $modelProduct; 
    private $modelCategorias;
    private $viewGeneral; 
    //private $modelCategory; 

    public function __construct(){ //funcion que construye los objetos(ej modelCategori) que voy a usar
        $this->modelProduct = new ProductModel();
        $this->modelCategorias = new CategoriasModel();
        $this->viewGeneral = new GeneralView();
    }

    public function mostrarInicio(){
        $productos = $this->modelProduct->traerTodos();
        $categorias = $this->modelCategorias->traerTodas();
        $this->viewGeneral->mostrarInicio($productos, $categorias);
    
    }
    
}