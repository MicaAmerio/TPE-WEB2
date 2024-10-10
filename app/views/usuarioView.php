<?php

require_once 'libs/Smarty.class.php';
class usuarioView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    public function mostrarlogin(){
        $this-> smarty->display("login.tpl");

    }
     }