<?php

require_once "app/models/CategoriasModel.php";
require_once "app/views/CategoriaView.php";


class CategoriasController { //objeto 

    private $model; // propiedades privadas
    private $view;

    public function __construct(){
        $this->model = new CategoriasModel();
        $this->view = new CategoriaView();
    }
    
    public function mostrarCategoria($id){
        $categoria = $this->model->traerCategoria($id);
        $this->view->mostrarProductosPorCategoria($categoria);

        
    } 
}