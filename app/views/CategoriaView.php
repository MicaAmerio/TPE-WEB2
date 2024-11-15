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

  public function administrarCategorias ($categorias){
    $this->smarty->assign ("categorias", $categorias);
    $this->smarty->display ("templates/ABMcategorias/Lista.tpl");

   }

   public function formularioeditarcategoria($categoria){
    $this->smarty->assign ("categoria", $categoria);
    $this->smarty->display ("templates/ABMcategorias/form-editar.tpl");
   }


   public function mostrarFormularioParaAgregar(){
    $this->smarty->display("templates/ABMcategorias/form-agregar.tpl");
   }
}