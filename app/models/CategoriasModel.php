<?php 
require_once "app/models/model.php";

class CategoriasModel {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function traerTodas(){

        $pdo = $this->model->devolverconexion(); //conexion
        $sql = "select * FROM categoria"; //selecciona todo, es una sentencia
        $query = $pdo->prepare($sql); //prepara la sentencia antes de ejecutar
        $query->execute();// ejecuta la sentencia
    
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);//pide todo como un arreglo y lo devuelve como filas.  FetchAll porque trae todo, si quisiera traer una sola cosa seria fetch solo.
    
        return $categorias; 


        
    }

    public function traerCategoria($id){
        $pdo = $this->model->devolverconexion();
        $sql = "select * FROM categoria JOIN producto ON categoria.id_categoria = producto.id_categoria WHERE categoria.id_categoria = ? "; //se usa sino de preg para seguirdad "inyecciones"
        $query = $pdo->prepare($sql); 
        $query-> execute([$id]);

        $categoria = $query->fetchAll (PDO::FETCH_OBJ); //categoria traigo un solo objeto(fila de la tabla)

        return $categoria;
    }
     
}