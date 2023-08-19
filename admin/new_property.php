<?php
  require_once('../includes/app.php'); 
  $pageTitle = "New Property";

  // var declarations
  $name = "";
  $description = "";
  $address = "";
  $type = "";
  $neighborhood = "";
  $city = "";
  $county = "";
  $state = "";
  $rooms = "";
  $bedrooms = "";
  $bathrooms = "";
  $services = "";
  $square_feet = "";
  $width = "";
  $length = "";
  $value = "";
  $transaction = "";
  $img1 = "";
  $img2 = "";
  $img3 = "";
  $img4 = "";
  $img5 = "";
  $img6 = "";
  $img7 = "";
  $img8 = "";
  $img9 = "";
  $img10 = "";
  $img11 = "";
  $img12 = "";
  $img13 = "";
  $img14 = "";
  $img15 = "";
  $button_1_text = "";
  $button_2_text = "";
  $button_3_text = "";
  $button_4_text = "";
  $button_5_text = "";
  $button_6_text = "";
  $button_7_text = "";
  $doc1 = "";
  $doc2 = "";
  $doc3 = "";
  $doc4 = "";
  $doc5 = "";
  $doc6 = "";
  $doc7 = "";
  $video_iframe = "";
  $map_iframe = "";
  $private_notes = "";
  $status = "";
  $featured = "";
  $code = "";
?>
<!doctype html>
<html lang="en">
  <head> 
    <?php include_once '../includes/modules/head.php' ?>
  </head>

  <body>
    <?php include_once '../includes/modules/navbar.php' ?>

    <?php include_once '../includes/modules/subHeroSection.php' ?>

    <section class="newPropertyForm">
      <div class="container">
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="first-block col-md-6 mt-4">
              <h3>Property Info</h3>
              <label for="name" class="form-label">Name</label>
              <p><small> (required field)</small></p>
              <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>">

              <label for="description" class="form-label">Description</label>
              <p><small> (required field)</small></p>
              <textarea name="description" id="description" maxlength="1200" class="form-control"><?php echo $description ?></textarea>

              <label for="address" class="form-label">Address</label>
              <textarea name="address" id="address" maxlength="1200" class="form-control"><?php echo $address ?></textarea>

              <label for="type">Type</label>
              <p><small> (required field)</small></p>
              <select name="type" id="type" class="form-select">
                  <option value="">Elija una opción</option>
                  <option <?php echo $type === 'casa' ? 'selected' : '' ?> value="casa">House</option>
                  <option <?php echo $type === 'departamento' ? 'selected' : '' ?> value="departamento">Apartment</option>
                  <option <?php echo $type === 'local' ? 'selected' : '' ?> value="local">Condo</option>
                  <option <?php echo $type === 'PH' ? 'selected' : '' ?> value="PH">Lot/Land</option>
              </select>

              <label for="neighborhood">Neighborhood</label>
              <input type="text" name="neighborhood" id="neighborhood" class="form-control" value="<?php echo $neighborhood ?>">

              <label for="city">City</label>
              <input type="text" name="city" id="city" class="form-control" value="<?php echo $city ?>">

              <label for="county">County</label>
              <input type="text" name="county" id="county" class="form-control" value="<?php echo $county ?>">

              <label for="state">State</label>
              <input type="text" name="state" id="state" class="form-control" value="<?php echo $state ?>">

              <label for="rooms">Rooms</label>
              <select name="rooms" id="rooms" class="form-select">
                  <option <?php echo $rooms == '1' ? 'selected' : '' ?> value="1">1</option>
                  <option <?php echo $rooms == '2' ? 'selected' : '' ?> value="2">2</option>
                  <option <?php echo $rooms == '3' ? 'selected' : '' ?> value="3">3</option>
                  <option <?php echo $rooms == '4' ? 'selected' : '' ?> value="4">4</option>
                  <option <?php echo $rooms == '5' ? 'selected' : '' ?> value="5">5</option>
                  <option <?php echo $rooms == '6' ? 'selected' : '' ?> value="6">6</option>
                  <option <?php echo $rooms == '7' ? 'selected' : '' ?> value="7">7</option>
                  <option <?php echo $rooms == '8' ? 'selected' : '' ?> value="8">8</option>
                  <option <?php echo $rooms == '9' ? 'selected' : '' ?> value="9">9</option>
                  <option <?php echo $rooms == '10' ? 'selected' : '' ?> value="10">10</option>
              </select>

              <label for="bedrooms">Bedrooms</label>
              <select name="bedrooms" id="bedrooms" class="form-select">
                  <option <?php echo $bedrooms == '1' ? 'selected' : '' ?> value="1">1</option>
                  <option <?php echo $bedrooms == '2' ? 'selected' : '' ?> value="2">2</option>
                  <option <?php echo $bedrooms == '3' ? 'selected' : '' ?> value="3">3</option>
                  <option <?php echo $bedrooms == '4' ? 'selected' : '' ?> value="4">4</option>
                  <option <?php echo $bedrooms == '5' ? 'selected' : '' ?> value="5">5</option>
                  <option <?php echo $bedrooms == '6' ? 'selected' : '' ?> value="6">6</option>
                  <option <?php echo $bedrooms == '7' ? 'selected' : '' ?> value="7">7</option>
                  <option <?php echo $bedrooms == '8' ? 'selected' : '' ?> value="8">8</option>
                  <option <?php echo $bedrooms == '9' ? 'selected' : '' ?> value="9">9</option>
                  <option <?php echo $bedrooms == '10' ? 'selected' : '' ?> value="10">10</option>
              </select>
              
              <label for="bathrooms">Bathrooms</label>
              <select name="bathrooms" id="bathrooms" class="form-select">
                  <option <?php echo $bathrooms == '1' ? 'selected' : '' ?> value="1">1</option>
                  <option <?php echo $bathrooms == '2' ? 'selected' : '' ?> value="2">2</option>
                  <option <?php echo $bathrooms == '3' ? 'selected' : '' ?> value="3">3</option>
                  <option <?php echo $bathrooms == '4' ? 'selected' : '' ?> value="4">4</option>
                  <option <?php echo $bathrooms == '5' ? 'selected' : '' ?> value="5">5</option>
                  <option <?php echo $bathrooms == '6' ? 'selected' : '' ?> value="6">6</option>
                  <option <?php echo $bathrooms == '7' ? 'selected' : '' ?> value="7">7</option>
                  <option <?php echo $bathrooms == '8' ? 'selected' : '' ?> value="8">8</option>
                  <option <?php echo $bathrooms == '9' ? 'selected' : '' ?> value="9">9</option>
                  <option <?php echo $bathrooms == '10' ? 'selected' : '' ?> value="10">10</option>
              </select>

              <label for="services">Services</label>
              <input type="text" name="services" id="services" class="form-control" value="<?php echo $services ?>">

              <label for="square_feet">Square feet</label>
              <input type="text" name="square_feet" id="square_feet" class="form-control" value="<?php echo $square_feet ?>">

              <label for="length">Lenght</label>
              <input type="text" name="length" id="length" class="form-control" value="<?php echo $length ?>">

              <label for="width">Width</label>
              <input type="text" name="width" id="width" class="form-control" value="<?php echo $width ?>">

              <label for="value">Value</label>
              <input type="text" name="value" id="value" class="form-control" value="<?php echo $value ?>">

              <label for="transaction">Transaction</label>
              <input type="text" name="transaction" id="transaction" class="form-control" value="<?php echo $transaction ?>">


            </div>
            
            <div class="second-block col-md-6 mt-4">
              <h3>Config</h3>
              <label for="status">Status</label>
              <select name="status" id="status" class="form-select">
                  <option <?php echo $status === 'hidden' ? 'selected' : '' ?> value="hidden">Hidden</option>
                  <option <?php echo $status === 'paused' ? 'selected' : '' ?> value="paused">Paused</option>
                  <option <?php echo $status === 'active' ? 'selected' : '' ?> value="active">Active</option>
                  <option <?php echo $status === 'reserved' ? 'selected' : '' ?> value="reserved">Reserved</option>
              </select>
              
              <label for="map_iframe">Map iframe</label>
              <textarea name="map_iframe" id="map_iframe" minlength="10" maxlength="2000" class="form-control"><?php echo $map_iframe ?></textarea>

              <label for="video_iframe">Video iframe</label>
              <textarea name="video_iframe" id="video_iframe" minlength="10" maxlength="2000" class="form-control"><?php echo $video_iframe ?></textarea>

              <label for="featured">¿Featured property?</label>
              <select name="featured" id="featured" class="form-select">
                  <option <?php echo $featured == '0' ? 'selected' : '' ?> value="0">No</option>
                  <option <?php echo $featured == '1' ? 'selected' : '' ?> value="1">Yes</option>
              </select>

              <label for="private_notes">Private Notes</label>
              <textarea name="private_notes" id="private_notes" minlength="10" maxlength="2000" class="form-control"><?php echo $private_notes ?></textarea>

            </div>  
          </div>

          <div class="row">
            <div class="third-block col-md-6 mt-4">
              <h3>Images</h3>
              <?php for ($i = 1; $i <= $galleryImagesNumber; $i++) { ?>
                  <div class="add-img">
                      <p class="title">Image <?php echo $i; ?></p> 
                      <input type="file" name="img<?php echo $i; ?>" id="img<?php echo $i; ?>" accept=".jpg, .jpeg, .gif, .png" />
                  </div>
              <?php } ?>
            </div>  
          
            <!-- <div class="fourth-block col-md-6 mt-4">
              <p><strong>Thumbnails here</strong>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div>  -->
            <div class="fifth-block col-md-6 mt-4">
              <h3>Docs</h3>
              <?php for ($i = 1; $i <= $propertyFilesNumber; $i++) : ?>
                  <?php 
                      $btnTextVar = ${'button_' . $i . '_text'};
                  ?>
                  <div class="add-file">
                      <h4 class="title title-main">Doc <?php echo $i; ?></h4>
                      <label for="button_<?php echo $i; ?>_text" class="titulo">Button text: </label>
                      <input type="text" name="button_<?php echo $i; ?>_text" class="form-control" id="button_<?php echo $i; ?>_text" value="<?php echo $btnTextVar ?>">
                      <br>
                      <label for="file<?php echo $i; ?>" class="titulo">File: </label>
                      <input type="file" name="doc<?php echo $i; ?>" id="file<?php echo $i; ?>" accept="application/pdf, .txt, image/*" /> 
                  </div>
              <?php endfor; ?>
            </div>
          </div>

          <!-- <div class="row">
            <div class="sixth-block col-md-6 mt-4">
              <p><strong>Thumbnails here</strong>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div>
          </div> -->


        </form>
      </div>
  </section>

    <?php include_once '../includes/modules/postFooterSection.php'?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../src/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../src/js/app.js"></script>

    <script src="../src/vendor/splide/js/splide.min.js"></script>
	  <script src="../src/vendor/splide/js/splideInit.js"></script>
   
  </body>
</html>
