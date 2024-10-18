<?php 
require_once "app/models/model.php";

class ProductModel {
    private $model;

    public function __construct() {
        $this->model = new Model();
        $this->_deploy();
    }
    private function _deploy() {
        $pdo = $this->model->devolverconexion();

        $query = $pdo->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if(count($tables) == 0) {
            $sql =
            'CREATE TABLE `categoria` (
            `id_categoria` int(20) NOT NULL,
            `nombre` varchar(100) NOT NULL,
            `descripcion` text DEFAULT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;';

            'INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES' .
            '(1, "limpieza", "dshfhsf")'.",".
            '(2, "bebdas", "xx")';

            'CREATE TABLE `producto` (
            `id_producto` int(20) NOT NULL,
            `nombre` varchar(100) NOT NULL,
            `marca` varchar(100) NOT NULL,
            `capacidad` varchar(50) NOT NULL,
            `precio` float NOT NULL,
            `descripcion` text DEFAULT NULL,
            `id_categoria` int(20) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;';

            'INSERT INTO `producto` (`id_producto`, `nombre`, `marca`, `capacidad`, `precio`, `descripcion`, `id_categoria`) VALUES' .
            '(10, "hshshs", "ggg", "gg", 55, "tt", 1)';

            'CREATE TABLE `usuarios` (
            `id` int(11) NOT NULL,
            `usuario` varchar(50) NOT NULL,
            `contraseña` varchar(100) NOT NULL,
            `es_admin` tinyint(1) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;';

            'INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `es_admin`) VALUES'.
            '(1, "webadmin", "$2a$12$9EooIijHnSgvkwzts.qHcuV5ws9dOiViGR98PPTSyCkf3CapUsORO", 1);';

            'ALTER TABLE `categoria`
            ADD PRIMARY KEY (`id_categoria`);';

            'ALTER TABLE `producto`
            ADD PRIMARY KEY (`id_producto`),
            ADD KEY `id_categoria` (`id_categoria`);';

            'ALTER TABLE `usuarios`
            ADD PRIMARY KEY (`id`);';

            'ALTER TABLE `categoria`
            MODIFY `id_categoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;';

           ' ALTER TABLE `producto`
            MODIFY `id_producto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;';


            'ALTER TABLE `usuarios`
            MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;';

            'ALTER TABLE `producto`
            ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
            COMMIT;';
            
        $pdo->query($sql);
  }
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