<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Appex-Real-Estate-Rwanda</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!--For registration page only--->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link
      href="css/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />
    <link href="css/main.min.css" rel="stylesheet" media="all" />

  </head>
<body>
    <?php include './common/header.html';?>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5 container">

        <?php
          if(isset($_GET['who'])&&$_GET['who']=='customer'&&isset($_GET['data'])){
              if($_GET['data']=='house'){
                  $id = $_GET['id'];?>
                    <div class="card-heading">
                        <h2 class="title">Customer Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="database/subscribe.php" method="POST">
                             <input type="hidden" name="who" value="customer">
                             <input type="hidden" name="data" value="house">
                             <input type="hidden" name="id" value="<?php echo $id;?>">

                             <div class="form-group">
                                 <label for="name">Names: </label>
                                 <input type="text" name="names" id="names" required class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" name="email" id="email" required class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="phone">Phone</label>
                                 <input type="tel" name="phone" id="phone" required class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="location">Location (Country)</label>
                                 <input type="location" name="location" id="location" required class="form-control">
                             </div>

                             <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>
             <?php }
              if($_GET['data']=='land'){
                  $id = $_GET['id'];?>
                    <div class="card-heading">
                        <h2 class="title">Customer Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="database/subscribe.php" method="POST">
                             <input type="hidden" name="who" value="customer">
                             <input type="hidden" name="data" value="land">
                             <input type="hidden" name="id" value="<?php echo $id;?>">

                             <div class="form-group">
                                 <label for="name">Names: </label>
                                 <input type="text" name="names" id="names" required class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" name="email" id="email" required class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="phone">Phone</label>
                                 <input type="tel" name="phone" id="phone" required class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="location">Location (Country)</label>
                                 <input type="location" name="location" id="location" required class="form-control">
                             </div>

                             <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>
              <?php }


              //request registration

              if($_GET['data']=='request'){?>
                  <div class="card-heading">
                      <h2 class="title">Customer Request Form</h2>
                  </div>
                  <div class="card-body">
                      <form action="database/subscribe.php" method="POST">
                           <div class="form-group">
                               <label for="names">Names: </label>
                               <input type="text" name="names" id="names" required class="form-control">
                           </div>

                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="email" name="email" id="email" required class="form-control">
                           </div>

                           <div class="form-group">
                               <label for="phone">Phone</label>
                               <input type="tel" name="phone" id="phone" required class="form-control">
                           </div>

                           <div class="form-group">
                               <label for="location">Location (Country)</label>
                               <input type="location" name="location" id="location" required class="form-control">
                           </div>

                           <div class="form-group">
                             <label for="property">Property</label>
                             <select name="property" id="property" class="form-control">
                               <option value="house" selected>House</option>
                               <option value="land">Land</option>
                             </select>
                           </div>

                           <div class="form-group">
                             <label for="description">Description</label>
                             <textarea name="description" id="description" cols="30" rows="6" class="form-control" placeholder="Enter the description of the property you want"></textarea>
                           </div>

                           <input type="submit" value="Submit" name="submitRequest" class="btn btn-primary">
                      </form>
                  </div>
           <?php }

              //request registration end
          }
        ?>
         
        </div>
      </div>
    </div>


    <?php include './common/footer.html';?>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src="js/active.js"></script>

    <!--for registration form--->
     <!-- Vendor JS-->
    <script src="js/select2.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>
</html>