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

    <title>Contact Us</title>
  </head>

  <body>
    <?php include'navbar.php';?>
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
  
