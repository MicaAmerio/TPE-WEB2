<?php
 require_once("./config.php");

class Model {

    private $conexion;

    public function __construct() {
        $this->conexion = $this->createConection();
    }

    public function devolverconexion(){
        return $this->conexion;
    }

    public function createConection() {
        try {
            $pdo = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
        return $pdo;
    }
}