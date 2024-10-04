<?php

require_once "app/models/ProductModel.php";
require_once "app/views/GeneralView.php";

class GeneralController { 

    //Usa los dos modelos
    private $modelProduct; 
    private $viewGeneral; 
    //private $modelCategory; 

    public function __construct(){
        $this->modelProduct = new ProductModel();
        $this->viewGeneral = new GeneralView();
    }

    public function mostrarInicio(){
        $productos = $this->modelProduct->traerTodos();
        $this->viewGeneral->mostrarInicio($productos);
    }
    
}