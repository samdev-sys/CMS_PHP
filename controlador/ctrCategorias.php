<?php


class Categorias{

    static public function ctrCategorias(){

        $tabla="categorias";

        $respuesta =modCategorias::getCategorias($tabla);

        return $respuesta;



    }
}

?>