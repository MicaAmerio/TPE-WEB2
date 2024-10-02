<?php

require_once 'libs/Smarty.class.php';

class GeneralView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    public function mostrarInicio($productos){
        $this->smarty->assign("productos", $productos);
        $this->smarty->display('templates/inicio.tpl');//plantilla donde muestro todos los productos
    }
}