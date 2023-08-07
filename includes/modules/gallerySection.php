<?php 
    // temp query result keys/values. 
    $elemento['img1'] = 'https://picsum.photos/600/300';
    $elemento['img2'] = 'https://picsum.photos/600/301';
    $elemento['img3'] = 'https://picsum.photos/600/302';
    $elemento['img4'] = 'https://picsum.photos/600/303';
    $elemento['img5'] = 'https://picsum.photos/600/304';
    $elemento['img6'] = 'https://picsum.photos/600/305';
    $elemento['img7'] = 'https://picsum.photos/600/306';
      
?>
<section class="gallery">
    <div class="container">
        <div class="row">
            <div id="main-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                            for ($i = 1; $i <= $galleryImagesNumber; $i++) {
                                $nombreImagen = 'img' . $i;
                                if ($elemento[$nombreImagen]) :
                                $imgUrl = $elemento[$nombreImagen];
                            ?>
                                <li class="splide__slide">
                                    <a href="<?php echo $imgUrl ?>" target="_blank"><img src="<?php echo $imgUrl ?>"/></a>
                                </li>
                            <?php 
                                endif;
                            }
                            ?>
                    </ul>
                </div>
            </div>
                
            <ul id="thumbnails" class="thumbnails">
                <?php
                for ($i = 1; $i <= $galleryImagesNumber; $i++) {
                    $nombreImagen = 'img' . $i;
                    if ($elemento[$nombreImagen]) :
                    $imgUrl = $elemento[$nombreImagen];
                ?>
                    <li class="thumbnail">
                        <img src="<?php echo $imgUrl ?>" />
                    </li>
                <?php 
                    endif;
                }
                ?>
            </ul>
        </div>
    </div>
</section>


