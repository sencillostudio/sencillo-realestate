<?php
  require_once('includes/config.php'); 
  $pageTitle = "Home";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'includes/modules/head.php' ?>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Sencillo Real Estate</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="properties.php">Properties</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#contact">Leave us a message</a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>

    <div class="heroSection p-5">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Sencillo Real Estate</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nulla, facere consequatur amet voluptates a eos, quos quae odio quidem aperiam excepturi! Delectus consequatur quasi ad saepe harum similique accusantium!</p>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
      <div class="carousel-title section-title text-center">
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
      <div class="container">
        <h2 class="">About Sencillo Real Estate</h2>
        <p class="col-md-8 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nulla, facere consequatur amet voluptates a eos, quos quae odio quidem aperiam excepturi! Delectus consequatur quasi ad saepe harum similique accusantium!</p>
        <p class="col-md-8 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nisi earum iure quibusdam quod dolor hic. Incidunt temporibus, labore dolore voluptatibus unde explicabo magni, amet, minus esse voluptates sit commodi?</p>
      </div>
    </div>

    <section class="text-tape">
      <div class="container">
        <div class="row">
          <p>Lorem ipsum dolor sit <strong>amet consectetur</strong> adipisicing elit. Necessitatibus illo iure optio perferendis ex error id in mollitia reprehenderit? Quisquam, nobis est! Dolorum eum quod labore est delectus accusantium earum?</p>
        </div>
      </div>
    </section>

    <div class="contactSection reg-section reg-section-soft-gradient" id="contact">
      <div class="container">
        <h2 class="">Leave us a message</h2>
        <form action="" class="col-md-8">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Send</button>
          </div>
        </form>
      </div>
    </div>

    <section class="footerSection">
      <div class="container">
        <div class="row">
          <div class="block-1 col"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eos corrupti voluptate magnam saepe debitis facilis quidem aut eum, at repellendus soluta deleniti nobis amet possimus, veritatis fugiat perspiciatis reprehenderit?</p></div>
          <div class="block-2 col"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eos corrupti voluptate magnam saepe debitis facilis quidem aut eum, at repellendus soluta deleniti nobis amet possimus, veritatis fugiat perspiciatis reprehenderit?</p></div>
          <div class="block-3 col"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eos corrupti voluptate magnam saepe debitis facilis quidem aut eum, at repellendus soluta deleniti nobis amet possimus, veritatis fugiat perspiciatis reprehenderit?</p></div>
        </div>
      </div>
    </section>

    <section class="postFooterSection">
      <div class="container">
        <div class="row">
          <p>
            <a href="login.php" class="btn btn-sm btn-dark">login</a>
            <a href="aboutThisProject.php" class="btn btn-sm btn-dark">about this project</a>
          </p>
          <p>website created by Milton Zini (<a href="https://github.com/miltonzini" target="_blank">Github</a> | <a href="https://mzdev.com.ar">Portfolio</a>)</p>
        </div>
      </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="src/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="src/js/app.js"></script>
   
  </body>
</html>