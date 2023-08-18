<?php
  require_once('includes/app.php'); 
  $pageTitle = "Properties";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'includes/modules/head.php' ?>
  </head>

  <body>
    <?php include_once 'includes/modules/navbar.php' ?>

    <?php include_once 'includes/modules/subHeroSection.php' ?>

    <nav class="options">
      <div class="container">
        <a href="#" class="btn btn-md btn-light">Buy</a>
        <a href="#" class="btn btn-md btn-light">Rent</a>
      </div>
    </nav>

    <?php include_once 'includes/modules/cardsSection.php'?>
    
    <?php include_once 'includes/modules/statementSection.php'?>

    <?php include_once 'includes/modules/contactSection.php'?>

    <?php include_once 'includes/modules/footerSection.php'?>

    <?php include_once 'includes/modules/postFooterSection.php'?>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="src/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="src/js/app.js"></script>
   
  </body>
</html>