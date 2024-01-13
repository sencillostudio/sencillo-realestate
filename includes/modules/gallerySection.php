<?php 
    // temp query result keys/values. 
    $elemento['img1'] = 'https://picsum.photos/600/300';
    $elemento['img2'] = 'https://picsum.photos/600/301';
    $elemento['img3'] = 'https://picsum.photos/600/302';
    $elemento['img4'] = 'https://picsum.photos/600/303';
    $elemento['img5'] = 'https://picsum.photos/600/304';
    $elemento['img6'] = 'https://picsum.photos/600/305';
    $elemento['img7'] = 'https://picsum.photos/600/306';
    $elemento['img8'] = 'https://picsum.photos/600/307';
    $elemento['img9'] = 'https://picsum.photos/600/308';
    $elemento['img10'] = 'https://picsum.photos/600/309';
    $elemento['img11'] = 'https://picsum.photos/600/310';
    $elemento['img12'] = 'https://picsum.photos/600/311';
    $elemento['img13'] = 'https://picsum.photos/600/312';
    $elemento['img14'] = 'https://picsum.photos/600/313';
    $elemento['img15'] = 'https://picsum.photos/600/314';

      
?>
<section class="gallery reg-section reg-section-soft-gradient">
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


