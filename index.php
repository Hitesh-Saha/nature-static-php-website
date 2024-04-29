<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <title>Home</title>
  </head>

  <body>
    <?php include'navbar.php';?>
    <!-- Header starts -->
    <header>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li  data-target="#carouselExampleCaptions" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
          <li  data-target="#carouselExampleCaptions" data-slide-to="1" aria-label="Slide 2"></li>
          <li  data-target="#carouselExampleCaptions" data-slide-to="2" aria-label="Slide 3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/img1.jpg" class="d-block w-100" alt="images/img1.jpg">
            <div class="carousel-caption d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/img2.jpg" class="d-block w-100" alt="images/img2.jpg">
            <div class="carousel-caption  d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/img3.jpg" class="d-block w-100" alt="images/img3.jpg">
            <div class="carousel-caption  d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" role="button" data-target="#carouselExampleCaptions"  data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" role="button" data-target="#carouselExampleCaptions"  data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </header>
    <!-- Header ends -->

    <!-- Main Body starts -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 pt-4 pb-2" >
            <h3 class="text-capitalize display header">About us</h3>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12 col-md-6 mb-4">
            <img class="img-fluid" src="images/img1.jpg" alt="error">
          </div>
          <div class="col-12 col-md-6 mb-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse arcu nisl, mattis eu tortor ac, auctor maximus purus. Mauris mollis massa a pulvinar ultricies. Cras pretium, elit non posuere blandit, nisl sapien semper felis, ut tempus mauris lorem sit amet purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam id aliquam dui. Etiam sit amet massa augue. Maecenas egestas turpis nunc, ut egestas magna pharetra ut. Nulla egestas lectus eget metus venenatis, vel varius enim ultricies. </p>
            <a href="aboutus.php"><button type="button" class="btn btn-outline-success">Check More...</button></a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 pt-4 pb-2" >
            <h3 class="text-capitalize display header">Our Services</h3>
          </div>
        </div>
        <hr>
        <div class="card-group">
          <div class="card pr-2">
            <img src="images/img3.jpg" class="card-img-top" alt="image">
            <div class="card-body">
              <h5 class="card-title">Switzerland</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a href="services.php"><button type="button" class="btn btn-outline-success">Check More...</button></a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card pr-2">
            <img src="images/img3.jpg" class="card-img-top" alt="image">
            <div class="card-body">
              <h5 class="card-title">Italy</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <a href="services.php"><button type="button" class="btn btn-outline-success">Check More...</button></a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img src="images/img3.jpg" class="card-img-top" alt="image">
            <div class="card-body">
              <h5 class="card-title">Canada</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <a href="services.php"><button type="button" class="btn btn-outline-success">Check More...</button></a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 pt-4 pb-2" >
            <h3 class="text-capitalize display header">Our Gallery</h3>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
          <div class="col-12 col-md-4 mb-4">
            <img class="img-fluid" src="images/img2.jpg" alt="error">
          </div>
        </div>
      </div>
    </section>
    <!-- Main Body ends -->

    <!-- Footer starts -->
    <footer>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12 pt-4 pb-2" >
              <h3 class="text-capitalize display header">contact us</h3>
            </div>
          </div>
          <div class="w-50 m-auto">
            <form action="userinfo.php" method="POST">
              <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="form-group">
                <label>E-mail:</label>
                <input type="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Mobile no.:</label>
                <input type="text" name="mobile" class="form-control">
              </div>
              <div class="form-group">
                <label>Comments:</label>
                <textarea class="form-control" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-success">submit</button>
            </form>
          </div>
          <hr>
        </div>
      </section>

      <section>
        <div class="container-fluid footer">
          <div class="row">
            <div class="col-12">
              <h5 class="text-capitalize display header">designed by Hitesh saha &copyHitesh Techies || 2021 ||</h5>
            </div>
          </div>
        </div>
      </section>
    </footer>
    <!-- Footer ends -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>