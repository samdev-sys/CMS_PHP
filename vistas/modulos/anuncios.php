<section id="section-text" class="no top">

<div class="container">
    <div class="row">
        <div class="col-lg12">
            <h2 class="style-2"> Anuncios hot XXX</h2>
        </div>

        <?php
        foreach($anuncios as $value){
        ?>
        <div class="col-lg-4 col-md-6 mb-sm-30">
            <div class="feature-box f-boxed style-3">
                <a href="<?php echo $value["Enlace"]; ?>">
                    <img src="<?php echo $value["foto"];  ?>"  width="270" height="230" class="lazy">
                </a>
            </div>
        </div>
        <?php
        }

        ?>
    </div>
</div>
</section>