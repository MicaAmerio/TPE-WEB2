<?php

require_once "app/models/ProductModel.php";
require_once "app/views/ProductView.php";
 
 class ABMProductoController{
 
    private $model; // propiedades privadas
    private $view;

    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }
    public function mostrarlista(){
       $productos=$this->model->traertodos();
       $this->view->mostrarlista($productos);
    }
 }