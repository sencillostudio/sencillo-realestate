<?php
  require_once('../includes/app.php'); 
  $pageTitle = "Admin Panel";

  // if (!$auth) {
	// 	header('location: ../index.php');
	// }
?>
<!doctype html>
<html lang="en">
  <head> 
    <?php include_once '../includes/modules/head.php' ?>
  </head>

  <body>
    <?php include_once '../includes/modules/navbar.php' ?>

    <?php include_once '../includes/modules/subHeroSection.php' ?>

    <section class="regSection">
      <div class="container">
        <ul><a class="btn btn-primary" href="new_property.php">Create New Property</a></ul>
        <ul><a class="btn btn-primary" href="properties_list.php">See all properties</a></ul>
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
