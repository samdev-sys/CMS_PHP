<?php

$ruta=Ruta::ctr_Ruta();

// $ruta ="http://localhost/MVC/vistas/"

$grupos=Controladorwsp::ctrGrupos();

$categorias=Categorias::ctrCategorias();
$anuncios=CtrAnuncios::ctranuncios();
var_dump($categorias);

// echo $categorias [1][1];
?>
<?php echo $ruta ;  ?>




<!DOCTYPE html>
<html lang="zxx">



<?php
       include "modulos/cabecera.php";
       ?>

<body class="dark-scheme de-grey">
    <div id="wrapper">



    <?php    

    $url= array();
    
    if(isset($_GET["ruta"])){

        $url =explode("/",$_GET["ruta"]);

        if($ruta[0]=="inicio"){
            

            include "modulos/".$url[0].".php";
        }if($url[0]== $categorias [0][1]  ||
            $url[0] == $categorias [1][1] ||
            $url[0]== $categorias [2][1]){

                include "modulos/gruposespecificos.php";

            } 
    }
    
    
    
    
    ?>
            









         <?php   include "modulos/inicio.php";?>

         
        
   
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
       <?php include "modulos/footer.php"?>
        <!-- footer close -->
        
    </div>
 


</body>


<!-- Mirrored from gigaland.io/03_grey-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Oct 2021 00:17:29 GMT -->
</html>