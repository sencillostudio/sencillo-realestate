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

    <section class="addPropertyForm">
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
              <input type="text" name="neighborhood" id="neighborhood" value="<?php echo $neighborhood ?>">

              <label for="city">City</label>
              <input type="text" name="city" id="city" value="<?php echo $city ?>">

              <label for="state">State</label>
              <input type="text" name="state" id="state" value="<?php echo $state ?>">

              <label for="provincia">Provincia</label>
              <input type="text" name="provincia" id="provincia" value="<?php echo $provincia ?>">

              <label for="rooms">Rooms</label>
              <select name="rooms" id="rooms">
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
              <select name="bedrooms" id="bedrooms">
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
              <select name="bathrooms" id="bathrooms">
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
              <input type="text" name="services" id="services" value="<?php echo $services ?>">


            </div>
            
            <div class="second-block col-md-6 mt-4">
              <h3>Config</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div>  
          </div>

          <div class="row">
            <div class="third-block col-md-6 mt-4">
              <h3>Images</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div>  
          
            <div class="fourth-block col-md-6 mt-4">
            <p><strong>Thumbnails here</strong>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div> 
          </div>

          <div class="row">
            <div class="fifth-block col-md-6 mt-4">
              <h3>Docs</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div>
            <div class="sixth-block col-md-6 mt-4">
              <p><strong>Thumbnails here</strong>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div>
          </div>


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
