<?php


 class Conexion{

    static public function conectar(){

        $link=new PDO("mysql:host=localhost;port=3307;dbname=MVC","root","");

        $link->exec("set names utf8mb4");

        return $link;

    }


 }
?>