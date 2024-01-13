<?php
  require_once('../includes/app.php'); 
  $pageTitle = "Edit Property";

  use App\Property; 

  $id = $_GET['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if(!$id) {
    header('location: ../index.php'); 
  }

  $property = Property::find($id);



  // Error/success arrays
  $errors = Property::getErrors();
  $success = [];


  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $property = new Property($_POST);
    $errors = $property->validate();

    if (empty($errors)) {
      $result = $property->save();
      
      if($result) {
        $success[] = "<p><strong>Property</strong> added</p>";
        $success[] = "<p>(" . $property->code . ")</p>";

        $imagesResult = $property->uploadImages($galleryImagesNumber);
        if ($imagesResult) {
          $success[] = "<p><strong>Images</strong> added</p>";
        }

        $docsResult = $property->uploadDocs($propertyDocsNumber);
        if ($docsResult) {
          $success[] = "<p><strong>Docs</strong> uploaded</p>";
        }


      }
    } else {
      alertDangerFromArray($errors);
    }

    if (!empty($success)) {
      alertSuccessFromArray($success);
    }

  }
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
              <input type="text" name="name" id="name" class="form-control" value="<?php echo escapeHTML($property->name); ?>" required>

              <label for="description" class="form-label">Description</label>
              <p><small> (required field)</small></p>
              <textarea name="description" id="description" maxlength="1200" class="form-control" required><?php echo escapeHTML($property->description); ?></textarea>

              <label for="address" class="form-label">Address</label>
              <input type="text" name="address" id="address" class="form-control" value="<?php echo escapeHTML($property->address); ?>">

              <label for="type">Type</label>
              <select name="type" id="type" class="form-select">
                  <option value="">Elija una opción</option>
                  <option <?php echo $property->type === 'house' ? 'selected' : '' ?> value="house">House</option>
                  <option <?php echo $property->type === 'apartment' ? 'selected' : '' ?> value="apartment">Apartment</option>
                  <option <?php echo $property->type === 'condo' ? 'selected' : '' ?> value="condo">Condo</option>
                  <option <?php echo $property->type === 'land' ? 'selected' : '' ?> value="land">Lot/Land</option>
              </select>

              <label for="neighborhood">Neighborhood</label>
              <input type="text" name="neighborhood" id="neighborhood" class="form-control" value="<?php echo escapeHTML($property->neighborhood) ?>">

              <label for="city">City</label>
              <input type="text" name="city" id="city" class="form-control" value="<?php echo escapeHTML($property->city) ?>">

              <label for="county">County</label>
              <input type="text" name="county" id="county" class="form-control" value="<?php echo escapeHTML($property->county) ?>">

              <label for="state">State</label>
              <input type="text" name="state" id="state" class="form-control" value="<?php echo escapeHTML($property->state) ?>">

              <label for="rooms">Rooms</label>
              <select name="rooms" id="rooms" class="form-select">
                  <option <?php echo $property->rooms == '1' ? 'selected' : '' ?> value="1">1</option>
                  <option <?php echo $property->rooms == '2' ? 'selected' : '' ?> value="2">2</option>
                  <option <?php echo $property->rooms == '3' ? 'selected' : '' ?> value="3">3</option>
                  <option <?php echo $property->rooms == '4' ? 'selected' : '' ?> value="4">4</option>
                  <option <?php echo $property->rooms == '5' ? 'selected' : '' ?> value="5">5</option>
                  <option <?php echo $property->rooms == '6' ? 'selected' : '' ?> value="6">6</option>
                  <option <?php echo $property->rooms == '7' ? 'selected' : '' ?> value="7">7</option>
                  <option <?php echo $property->rooms == '8' ? 'selected' : '' ?> value="8">8</option>
                  <option <?php echo $property->rooms == '9' ? 'selected' : '' ?> value="9">9</option>
                  <option <?php echo $property->rooms == '10' ? 'selected' : '' ?> value="10">10</option>
              </select>

              <label for="bedrooms">Bedrooms</label>
              <select name="bedrooms" id="bedrooms" class="form-select">
                  <option <?php echo $property->bedrooms == '1' ? 'selected' : '' ?> value="1">1</option>
                  <option <?php echo $property->bedrooms == '2' ? 'selected' : '' ?> value="2">2</option>
                  <option <?php echo $property->bedrooms == '3' ? 'selected' : '' ?> value="3">3</option>
                  <option <?php echo $property->bedrooms == '4' ? 'selected' : '' ?> value="4">4</option>
                  <option <?php echo $property->bedrooms == '5' ? 'selected' : '' ?> value="5">5</option>
                  <option <?php echo $property->bedrooms == '6' ? 'selected' : '' ?> value="6">6</option>
                  <option <?php echo $property->bedrooms == '7' ? 'selected' : '' ?> value="7">7</option>
                  <option <?php echo $property->bedrooms == '8' ? 'selected' : '' ?> value="8">8</option>
                  <option <?php echo $property->bedrooms == '9' ? 'selected' : '' ?> value="9">9</option>
                  <option <?php echo $property->bedrooms == '10' ? 'selected' : '' ?> value="10">10</option>
              </select>
              
              <label for="bathrooms">Bathrooms</label>
              <select name="bathrooms" id="bathrooms" class="form-select">
                  <option <?php echo $property->bathrooms == '1' ? 'selected' : '' ?> value="1">1</option>
                  <option <?php echo $property->bathrooms == '2' ? 'selected' : '' ?> value="2">2</option>
                  <option <?php echo $property->bathrooms == '3' ? 'selected' : '' ?> value="3">3</option>
                  <option <?php echo $property->bathrooms == '4' ? 'selected' : '' ?> value="4">4</option>
                  <option <?php echo $property->bathrooms == '5' ? 'selected' : '' ?> value="5">5</option>
                  <option <?php echo $property->bathrooms == '6' ? 'selected' : '' ?> value="6">6</option>
                  <option <?php echo $property->bathrooms == '7' ? 'selected' : '' ?> value="7">7</option>
                  <option <?php echo $property->bathrooms == '8' ? 'selected' : '' ?> value="8">8</option>
                  <option <?php echo $property->bathrooms == '9' ? 'selected' : '' ?> value="9">9</option>
                  <option <?php echo $property->bathrooms == '10' ? 'selected' : '' ?> value="10">10</option>
              </select>

              <label for="services">Services</label>
              <input type="text" name="services" id="services" class="form-control" value="<?php echo escapeHTML($property->services) ?>">

              <label for="square_feet">Square feet</label>
              <input type="text" name="square_feet" id="square_feet" class="form-control" value="<?php echo escapeHTML($property->square_feet) ?>">

              <label for="length">Lenght</label>
              <input type="text" name="length" id="length" class="form-control" value="<?php echo escapeHTML($property->length) ?>">

              <label for="width">Width</label>
              <input type="text" name="width" id="width" class="form-control" value="<?php echo escapeHTML($property->width) ?>">

              <label for="value">Value</label>
              <input type="text" name="value" id="value" class="form-control" value="<?php echo escapeHTML($property->value) ?>">

              <label for="transaction">Transaction</label>
              <input type="text" name="transaction" id="transaction" class="form-control" value="<?php echo escapeHTML($property->transaction) ?>">


            </div>
            
            <div class="second-block col-md-6 mt-4">
              <h3>Config</h3>
              <label for="status">Status</label>
              <select name="status" id="status" class="form-select">
                  <option <?php echo $property->status === 'hidden' ? 'selected' : '' ?> value="hidden">Hidden</option>
                  <option <?php echo $property->status === 'paused' ? 'selected' : '' ?> value="paused">Paused</option>
                  <option <?php echo $property->status === 'active' ? 'selected' : '' ?> value="active">Active</option>
                  <option <?php echo $property->status === 'reserved' ? 'selected' : '' ?> value="reserved">Reserved</option>
              </select>
              
              <label for="map_iframe">Map iframe</label>
              <textarea name="map_iframe" id="map_iframe" minlength="10" maxlength="2000" class="form-control"><?php echo escapeHTML($property->map_iframe) ?></textarea>

              <label for="video_iframe">Video iframe</label>
              <textarea name="video_iframe" id="video_iframe" minlength="10" maxlength="2000" class="form-control"><?php echo escapeHTML($property->video_iframe) ?></textarea>

              <label for="featured">¿Featured property?</label>
              <select name="featured" id="featured" class="form-select">
                  <option <?php echo $property->featured == '0' ? 'selected' : '' ?> value="0">No</option>
                  <option <?php echo $property->featured == '1' ? 'selected' : '' ?> value="1">Yes</option>
              </select>

              <label for="private_notes">Private Notes</label>
              <textarea name="private_notes" id="private_notes" minlength="10" maxlength="2000" class="form-control"><?php echo escapeHTML($property->private_notes) ?></textarea>

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
          
            <div class="fourth-block col-md-6 mt-4">
              <p><strong>Img thumbnails here</strong>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div> 

            <div class="fifth-block col-md-6 mt-4">
              <h3>Docs</h3>
              <?php for ($i = 1; $i <= $propertyDocsNumber; $i++) : ?>
                  <?php 
                      $btnTextVarName = 'button_' . $i . '_text';
                      $btnTextValue = $property->$btnTextVarName;
                  ?>
                  <div class="add-file">
                      <h4 class="title title-main">Doc <?php echo $i; ?></h4>
                      <label for="<?php echo $btnTextVarName; ?>" class="titulo">Button text: </label>
                      <input type="text" name="<?php echo $btnTextVarName; ?>" class="form-control" id="<?php echo $btnTextVarName; ?>" value="<?php echo $btnTextValue ?>">
                      <br>
                      <label for="file<?php echo $i; ?>" class="titulo">File: </label>
                      <input type="file" name="doc<?php echo $i; ?>" id="file<?php echo $i; ?>" accept="application/pdf, .txt, image/*" /> 
                  </div>
              <?php endfor; ?>
            </div>
          
            <div class="sixth-block col-md-6 mt-4">
              <p><strong>Docs thumbnails here</strong>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quos blanditiis inventore laudantium possimus dolor asperiores repudiandae doloremque numquam, velit unde quo, quas placeat voluptatem distinctio magnam iure! Nobis, itaque!</p>
            </div>
          </div>

          <div class="btn-wrapper">
            <input type="submit" value="Update Property" class="btn btn-primary">
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
