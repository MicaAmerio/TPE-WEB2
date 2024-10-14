<?php 
require_once "app/models/model.php";

class ProductModel {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function traerTodos(){

        $pdo = $this->model->devolverconexion();
        $sql = "select p.*, c.nombre AS categoria from producto p inner join categoria c on c.id_categoria= p.id_categoria"; //selecciona todo
        $query = $pdo->prepare($sql); //prepara la sentencia antes de ejecutar
        $query->execute();// ejecuta la sentencia
    
        $productos = $query->fetchAll(PDO::FETCH_OBJ);//pide todo como un arreglo y lo devuelve como filas
    
        return $productos; 


        
    }
     public function traerproducto($id){
         $pdo=$this->model->devolverconexion();
         $sql="select p.*, c.nombre AS categoria from producto p inner join categoria c on c.id_categoria= p.id_categoria where p.id_producto = ?";
        $query=$pdo->prepare($sql);
        $query->execute([$id]);

        $producto= $query->fetch(pdo::FETCH_OBJ);

        return $producto;
    }

    public function eliminar($id){
        $pdo = $this->model->devolverconexion();
        $sql = "DELETE from producto where id_producto = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);
    }

}