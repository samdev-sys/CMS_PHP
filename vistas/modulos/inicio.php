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

            <section id="section-text" class="no-top">
                
            </section>
            
        </div>
        <!-- content close -->
