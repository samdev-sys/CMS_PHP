<?php
require_once "conexion.php";

class modAnuncios{


    static public function getAnuncios($tabla){
        $stmt= Conexion ::conectar()->prepare("SELECT*FROM $tabla");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
    }
}


?>