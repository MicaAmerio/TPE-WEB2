<?php
class Model {

    private $conexion;

    public function __construct() {
        // 1. abro la conexión con MySQL 
        $this->conexion = $this->createConection();
    }

    public function devolverconexion(){ //conexión a la base de datos me devuelve "createConection"
        return $this->conexion;
    }

    public function createConection() {
        $host = 'localhost'; 
        $userName = 'root'; 
        $password = '';
        $database = 'db_limpieza'; // nombre de la base de datos
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
        return $pdo;
    }
}