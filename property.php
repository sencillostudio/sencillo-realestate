<?php
  require_once('includes/config.php'); 
  $pageTitle = "Property";
?>
<!doctype html>
<html lang="en">
  <head> 
    <?php include_once 'includes/modules/head.php' ?>
  </head>

  <body>
    <?php include_once 'includes/modules/navbar.php' ?>

    <div class="heroSection p-5">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Properties</h1>
      </div>
    </div>


    <section class="gallery">
      <div class="container">
        <p>Gallery section. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, explicabo voluptate? Tempore incidunt deleniti delectus similique ad voluptate, optio rerum necessitatibus laborum? Quisquam, optio odit! Perspiciatis saepe repellendus corporis recusandae.</p>
      </div>
    </section>

    <?php include_once 'includes/modules/statementSection.php'?>

    <?php include_once 'includes/modules/contactSection.php'?>

    <?php include_once 'includes/modules/footerSection.php'?>

    <?php include_once 'includes/modules/postFooterSection.php'?>
    
    <script src="../https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../src/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../src/js/app.js"></script>
   
  </body>
</html>