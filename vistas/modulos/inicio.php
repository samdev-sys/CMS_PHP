 <!-- content begin -->
 <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" class="no-bottom" aria-label="section">
                <div class="d-carousel">
                    <div id="item-carousel-big" class="owl-carousel wow fadeIn">

                    <?php

                    foreach ($categorias as $key => $value) {
                        echo '  <div class="nft_pic">                            
                            <a href="03_grey-item-details.html">
                                <span class="nft_pic_info">
                                    <span class="nft_pic_title">'.$value["Cat_nom"].'</span>
                                    <span class="nft_pic_by">'.$value["Cat_descrp"].'</span>
                                </span>
                            </a>
                            <div class="nft_pic_wrap">
                                <img src="'.$value["Cat_foto"].'" class="lazy img-fluid" alt="">
                            </div>
                        </div>';
                    }

                    ?>

                  
                      

                       
                    </div>
                        <div class="d-arrow-left"><i class="fa fa-angle-left"></i></div>
                        <div class="d-arrow-right"><i class="fa fa-angle-right"></i></div>
                </div>
            </section>
            <br>
            <br>

            <?php include "etiquetas.php";?>

            <section id="section-collections" class="pt30 pb30">
                <div class="container">

                            <div class="spacer-single"></div>
                            
                            <div class="row wow fadeIn"> 
                                <div class="col-lg-12">
                                    <h2 class="style-2">Nuevos Grupos</h2>
                                </div>


                                <?php

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
                                

                                <!-- nft item begin -->

                                              
                                
                            </div>

                            <?php include "anuncios.php";?>

                            <div class="spacer-single"></div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="style-2">Grupos Recién Agregados</h2>
                                </div>
                                <div id="collection-carousel-alt" class="owl-carousel wow fadeIn">



                                <?php

                                foreach ($grupos as $key => $value) {
                                    echo'
                                        <div class="nft_coll style-2">
                                            <div class="nft_wrap">
                                                <a href="03_grey-collection.html"><img src="'.$value["wsp_foto"].'" class="lazy img-fluid" alt=""></a>
                                            </div>
                                            
                                            <div class="nft_coll_info">
                                                <a href="03_grey-collection.html"><h4>'.$value["wsp_nom"].'</h4></a>
                                                <span>'.$value["wsp_descrp"].'</span>

                                                <div class="menu_side_area">
    <a href="'.$value["wsp_link"].'" class="btn btn-success btn-lg" target="_blank">
        <span><i class="fa fa-whatsapp" aria-hidden="true"></i> Unirse al Grupo</span>
    </a>
    <span id="menu-btn"></span>
</div>

                                            </div>
                                        </div> ';


                                        
                                }

                                ?>
   
                                    </div>
                                </div>

                                <div class="spacer-double"></div>

                                
                        </div>
            </section>

            <section id="section-text" class="no-top">
                
            </section>
            
        </div>
        <!-- content close -->
