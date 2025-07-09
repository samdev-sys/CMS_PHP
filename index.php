<?php

require "controlador/CtrPlantilla.php";
require "controlador/Ctr_Ruta.php";
require "controlador/ctrgruposwsp.php";
require "controlador/ctrCategorias.php";
require "controlador/CtrAnuncios.php";

require "modelo/modelGrWsp.php";
require "modelo/modelCat.php";
require "modelo/modAnuncios.php";

$plantilla = new plantilla();

$plantilla->ctrPlantilla();

?>