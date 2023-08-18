<?php
  require_once('includes/app.php'); 
  $pageTitle = "Home";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'includes/modules/head.php' ?>
  </head>

  <body>
    <?php include_once 'includes/modules/navbar.php' ?>

    <div class="mainHeroSection p-5">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Sencillo Real Estate</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nulla, facere consequatur amet voluptates a eos, quos quae odio quidem aperiam excepturi! Delectus consequatur quasi ad saepe harum similique accusantium!</p>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
      <div class="carousel-title sectionTitle sectionTitle-center">
        <div class="container">
          <h2>Featured Properties and Developments</h2>
        </div>
      </div>
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="carousel-caption text-start">
              <div class="img-wrapper">
                <img class="carousel-img" src="https://picsum.photos/seed/picsum/300/200" alt="">
              </div>
              <div class="text-wrapper">
                <h3>House in the forest</h3>
                <p class="price opacity-75"><strong>Price:</strong> $123</p>
                <p class="code opacity-75"><strong>Code:</strong> prop123</p>
                <p class="description opacity-75"><strong>Description:</strong> Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-md btn-primary" href="#">See details</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="carousel-caption text-start">
              <div class="img-wrapper">
                <img class="carousel-img" src="https://picsum.photos/seed/picsum/300/200" alt="">
              </div>
              <div class="text-wrapper">
                <h3>House in the beach</h3>
                <p class="price opacity-75"><strong>Price:</strong> $123</p>
                <p class="code opacity-75"><strong>Code:</strong> prop123</p>
                <p class="description opacity-75"><strong>Description:</strong> Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-md btn-primary" href="#">See details</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="carousel-caption text-start">
              <div class="img-wrapper">
                <img class="carousel-img" src="https://picsum.photos/seed/picsum/300/200" alt="">
              </div>
              <div class="text-wrapper">
                <h3>Proyect in the City Center</h3>
                <p class="price opacity-75"><strong>Price:</strong> $123</p>
                <p class="code opacity-75"><strong>Code:</strong> prop123</p>
                <p class="description opacity-75"><strong>Description:</strong> Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-md btn-primary" href="#">See details</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="carousel-caption text-start">
              <div class="img-wrapper">
                <img class="carousel-img" src="https://picsum.photos/seed/picsum/300/200" alt="">
              </div>
              <div class="text-wrapper">
                <h3>Test 1</h3>
                <p class="price opacity-75"><strong>Price:</strong> $123</p>
                <p class="code opacity-75"><strong>Code:</strong> prop123</p>
                <p class="description opacity-75"><strong>Description:</strong> Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-md btn-primary" href="#">See details</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="carousel-caption text-start">
              <div class="img-wrapper">
                <img class="carousel-img" src="https://picsum.photos/seed/picsum/300/200" alt="">
              </div>
              <div class="text-wrapper">
                <h3>Test 2</h3>
                <p class="price opacity-75"><strong>Price:</strong> $123</p>
                <p class="code opacity-75"><strong>Code:</strong> prop123</p>
                <p class="description opacity-75"><strong>Description:</strong> Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-md btn-primary" href="#">See details</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="aboutUsSection reg-section reg-section-color-gradient" id="about">
      <div class="sectionTitle">
        <div class="container">
          <h2>About us</h2>
        </div>
      </div>
      <div class="container">
        <p class="col-md-8 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nulla, facere consequatur amet voluptates a eos, quos quae odio quidem aperiam excepturi! Delectus consequatur quasi ad saepe harum similique accusantium!</p>
        <p class="col-md-8 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nisi earum iure quibusdam quod dolor hic. Incidunt temporibus, labore dolore voluptatibus unde explicabo magni, amet, minus esse voluptates sit commodi?</p>
      </div>
    </div>

    <?php include_once 'includes/modules/statementSection.php'?>

    <?php include_once 'includes/modules/contactSection.php'?>

    <?php include_once 'includes/modules/footerSection.php'?>

    <?php include_once 'includes/modules/postFooterSection.php'?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="src/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="src/js/app.js"></script>
   
  </body>
</html>