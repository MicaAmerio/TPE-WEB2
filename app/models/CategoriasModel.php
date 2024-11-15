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

    public function traerCategoriaParaEditar($id){
        $pdo = $this->model->devolverconexion();
        $sql = "select * FROM categoria WHERE id_categoria = ? "; //se usa sino de preg para seguirdad "inyecciones"
        $query = $pdo->prepare($sql); 
        $query-> execute([$id]);

        $categoria = $query->fetch(pdo::FETCH_OBJ); //categoria traigo un solo objeto(fila de la tabla)

        return $categoria;
    }
     

    public function agregarCategoria($nombre, $descripcion){
        $pdo = $this->model->devolverconexion();
        $sql = "INSERT INTO `categoria`( `nombre`, `descripcion`) VALUES (?,?);";
        $query = $pdo->prepare($sql); 
        $query->execute([$nombre, $descripcion]);
    }

    public function eliminar($id){
        $pdo = $this->model->devolverconexion();
        $sql = "DELETE FROM categoria WHERE id_categoria = ? ";
        $query = $pdo->prepare($sql);
        $query->execute([$id]); 
    }
    public function editcategoria($id_categoria,$nombre,$descripcion){
        $pDO = $this->model->devolverconexion();

        $sql = 'UPDATE categoria SET nombre = ?,descripcion = ?  WHERE id_categoria = ?';

        $query = $pDO->prepare($sql);
        $query->execute([$nombre,$descripcion, $id_categoria]);

     
    }
}