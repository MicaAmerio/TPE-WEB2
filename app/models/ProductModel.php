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


     public function agregarproducto($nombre,$marca,$capacidad,$precio,$descripcion, $id_categoria){

            $pDO = $this->model->devolverconexion();
            
            $sql = 'INSERT INTO producto (nombre, marca, capacidad, precio, descripcion, id_categoria) 
                VALUES (?, ?, ?, ? , ?, ?)';
    
            $query = $pDO->prepare($sql);
            try {
                $query->execute([$nombre,$marca,$capacidad,$precio,$descripcion, $id_categoria]);
            } catch (\Throwable $th) {
                return null;
     }
     }
     public function traerParaeditar($id){
        $pdo = $this->model->devolverconexion();
        $sql = "SELECT categoria.nombre AS categoria, producto.id_producto, producto.nombre, producto.descripcion, 
        producto.marca, producto.capacidad, producto.precio FROM producto INNER JOIN categoria 
        ON producto.id_categoria = categoria.id_categoria WHERE producto.id_producto = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);

        $producto = $query->fetch(PDO::FETCH_OBJ);
        return $producto;
        
    }
    public function editproducto($nombre,$marca,$capacidad,$precio,$descripcion,$id_categoria,$producto){
        $pDO = $this->model->devolverconexion();

        $sql = 'UPDATE producto SET nombre = ?, marca = ?, capacidad = ?, precio = ?, descripcion = ?, id_categoria= ? WHERE id_producto = ?';

        $query = $pDO->prepare($sql);
        $query->execute([$nombre,$marca,$capacidad,$precio,$descripcion,$id_categoria,$producto]);

     
    }

     
   }