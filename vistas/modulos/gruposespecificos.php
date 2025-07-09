<?php

if(isset($_GET["ruta"]))
{







?>
        
        
        <section id="section-collections" class="pt30 pb30">
                <div class="container">

                            <div class="spacer-single"></div>
                            
                            <div class="row wow fadeIn"> 
                                <div class="col-lg-12">
                                    <h2 class="style-2">Nuevos Grupos</h2>
                                </div>


                                <?php

        if($url[0]==$categorias [0][1]  ||
            $url[0] ==$categorias [1][1] ||
            $url[0]== $categorias [2][1]){

                $categoriaespecifica=modCategorias::getCategoriasEspecificas($url[0]);



            }


                                foreach ($grupos as $key => $value) {
                                    echo '<div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="nft__item style-2">
                                    
                                     
                                        <div class="nft__item_wrap">
                                            
                                            <a href="03_grey-item-details.html">
                                                <img src="'.$value["wsp_foto"].'" class="lazy nft__item_preview" alt="">
                                            </a>
                                        </div>
                                        <div class="nft__item_info">
                                            <a href="03_grey-item-details.html">
                                                <h4>'.$value["wsp_nom"].'</h4>
                                            </a>
                                            <div class="nft__item_click">
                                        
                                    </div>
                                    <div class="nft__item_price">
                                               '.$value["wsp_descrp"].'
                                            </div>
<div class="menu_side_area">
    <a href="'.$value["wsp_link"].'" class="btn btn-success btn-lg" target="_blank">
        <span><i class="fa fa-whatsapp" aria-hidden="true"></i> Unirse al Grupo</span>
    </a>
    <span id="menu-btn"></span>
</div>

            
                                            
                                                                
                                        </div> 
                                    </div>
                                </div>   ';
                                }
                                
                                ?>

                                <?php
                                
}

?>


                            

                            <div class="spacer-single"></div>

                     
                                <div class="spacer-double"></div>

                                
                        </div>
            </section>
