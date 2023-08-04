<?php
  require_once('includes/config.php'); 
  $pageTitle = "Properties";
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

    <nav class="options">
      <div class="container">
        <a href="#" class="btn btn-md btn-light">Buy</a>
        <a href="#" class="btn btn-md btn-light">Rent</a>
      </div>
    </nav>

    <section class="cardsSection">
      <div class="container">
        <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-lg-4 g-3">
          
          <div class="col">
            <div class="card">
              <div class="card-cover">
                <img src="src/img/misc/property-cover-example.png" class="card-img-top" alt="...">
              </div>
              <div class="card-content">
                <h5 class="card-title">Property Name</h5>
                <p class="price"><strong>price:</strong> $450</p>
                <p class="type"><strong>type:</strong> House</p>
                <p class="code"><strong>code:</strong> prop0053</p>
                <p class="description">Welcome to this spacious country house nestled in the tranquil countryside. With its stunning views, the home exudes rustic charm while offering modern comforts. Step into serenity and experience the perfect getaway for a peaceful rural lifestyle.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-cover">
                <img src="src/img/misc/property-cover-example2.png" class="card-img-top" alt="...">
              </div>
              <div class="card-content">
                <h5 class="card-title">Property Name</h5>
                <p class="price"><strong>price:</strong> $450</p>
                <p class="type"><strong>type:</strong> House</p>
                <p class="code"><strong>code:</strong> prop0053</p>
                <p class="description">Welcome to this spacious country house nestled in the tranquil countryside. With its stunning views, the home exudes rustic charm while offering modern comforts. Step into serenity and experience the perfect getaway for a peaceful rural lifestyle.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-cover">
                <img src="src/img/misc/property-cover-example.png" class="card-img-top" alt="...">
              </div>
              <div class="card-content">
                <h5 class="card-title">Property Name</h5>
                <p class="price"><strong>price:</strong> $450</p>
                <p class="type"><strong>type:</strong> House</p>
                <p class="code"><strong>code:</strong> prop0053</p>
                <p class="description">Welcome to this spacious country house nestled in the tranquil countryside. With its stunning views, the home exudes rustic charm while offering modern comforts. Step into serenity and experience the perfect getaway for a peaceful rural lifestyle.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-cover">
                <img src="src/img/misc/property-cover-example2.png" class="card-img-top" alt="...">
              </div>
              <div class="card-content">
                <h5 class="card-title">Property Name</h5>
                <p class="price"><strong>price:</strong> $450</p>
                <p class="type"><strong>type:</strong> House</p>
                <p class="code"><strong>code:</strong> prop0053</p>
                <p class="description">Welcome to this spacious country house nestled in the tranquil countryside. With its stunning views, the home exudes rustic charm while offering modern comforts. Step into serenity and experience the perfect getaway for a peaceful rural lifestyle.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-cover">
                <img src="src/img/misc/property-cover-example.png" class="card-img-top" alt="...">
              </div>
              <div class="card-content">
                <h5 class="card-title">Property Name</h5>
                <p class="price"><strong>price:</strong> $450</p>
                <p class="type"><strong>type:</strong> House</p>
                <p class="code"><strong>code:</strong> prop0053</p>
                <p class="description">Welcome to this spacious country house nestled in the tranquil countryside. With its stunning views, the home exudes rustic charm while offering modern comforts. Step into serenity and experience the perfect getaway for a peaceful rural lifestyle.</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-cover">
                <img src="src/img/misc/property-cover-example2.png" class="card-img-top" alt="...">
              </div>
              <div class="card-content">
                <h5 class="card-title">Property Name</h5>
                <p class="price"><strong>price:</strong> $450</p>
                <p class="type"><strong>type:</strong> House</p>
                <p class="code"><strong>code:</strong> prop0053</p>
                <p class="description">Welcome to this spacious country house nestled in the tranquil countryside. With its stunning views, the home exudes rustic charm while offering modern comforts. Step into serenity and experience the perfect getaway for a peaceful rural lifestyle.</p>
              </div>
            </div>
          </div>

          

          
        </div>
      </div>
    </section>
    

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