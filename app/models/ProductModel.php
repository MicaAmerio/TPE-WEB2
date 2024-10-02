<?php 
require_once "app/models/model.php";

class ProductModel {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function traerTodos(){

        $pdo = $this->model->devolverconexion();
        $sql = "select * from producto"; //selecciona todo
        $query = $pdo->prepare($sql); //prepara la sentencia antes de ejecutar
        $query->execute();// ejecuta la sentencia
    
        $productos = $query->fetchAll(PDO::FETCH_OBJ);//pide todo como un arreglo y lo devuelve como filas
    
        return $productos; 


        
    }

}