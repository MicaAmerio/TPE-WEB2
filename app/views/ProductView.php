<?php

require_once 'libs/Smarty.class.php';

class ProductView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    public function mostrarproducto($producto){
    $this->smarty->assign("producto", $producto);
    $this->smarty->display("templates/mostrarproduct.tpl");
    }
    public function mostrarlista($productos){
    $this->smarty->assign("productos",$productos);
    $this->smarty->display("templates/ABMproductos/lista.tpl");
    }
     }