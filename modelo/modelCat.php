<?php
require_once "conexion.php";

class modCategorias {
    

    static public function getCategorias($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT*FROM $tabla");

        $stmt ->execute();

        return $stmt->fetchAll();

        $stmt->close();
        
        $stmt=null;
    }


    static public function getCategoriasEspecificas($nomcategoria){


        $stmt =Conexion::conectar()->prepare ("SELECT * FROM grupos_wsp INNER JOIN categorias ON grupos_wsp.id_cat=categorias.id WHERE categorias.Cat_nom=:nomcat");

        $stmt->bindParam(":nomcat",$nomcategoria,PDO::PARAM_STR);

        $stmt -> execute();
        return
        $stmt->fetchAll();
        $stmt-> close();
        $stmt = null;
    }
}

?>