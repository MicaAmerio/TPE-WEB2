<?php

require_once "app/models/model.php";

class usuarioModel {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function buscarUsuario($nombre){
        $pdo = $this->model->devolverconexion();
        $sql = "select * from usuarios where usuario = ?";
        $query = $pdo->prepare($sql); //prepara la sentencia antes de ejecutar
        $query->execute([$nombre]);// ejecuta la sentencia
        $usuario = $query->fetch(PDO::FETCH_OBJ);//pide todo como un arreglo y lo devuelve como filas
        return $usuario; 
    }

}
