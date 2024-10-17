<?php

require_once 'libs/Smarty.class.php';

class CategoriaView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

   public function mostrarProductosPorCategoria($categoria){
    $this->smarty->assign("categoria", $categoria);
    $this->smarty->display("templates/productosPorCategoria.tpl");
   }
}