<?php
 class ctranuncios{



    static public function ctranuncios(){

        $tabla="anuncios";
        $respuesta=modAnuncios::getAnuncios($tabla);

        return $respuesta;

    }
 }

?>