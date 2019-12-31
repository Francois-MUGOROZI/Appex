<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About - Appex - Estate</title>
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
  </head>
  <body>
  <?php include "./common/header.html";?>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('assets/img/web/service3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text align-items-center justify-content-center"
        >
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs">
              <span class="mr-2"><a href="index.html">Home</a></span>
              <span>About</span>
            </p>
            <h1 class="mb-3 bread">About</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftc-no-pb">
      <div class="container">
        <div class="row no-gutters">
          <div
            class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
            style="background-image: url('assets/img/web/service2.jpg');"
          ></div>
          <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section heading-section-wo-line mb-5 pl-md-5">
              <div class="pl-md-5 ml-md-5">
                <span class="subheading">Company Overview</span>
                <h2 class="mb-4">The Real Estate Company</h2>
              </div>
            </div>
            <div class="pl-md-5 ml-md-5 mb-5">
              <p>
                This the best Real Estate company in Rwanda. You need a house or
                land in Rwanda? working with us is the best choice to get the
                place of you dream in Rwanda. We do every thing for you and we
                give you the ownership
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftc-no-pb">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section heading-section-wo-line mb-5 pl-md-5">
              <div class="pl-md-5 ml-md-5">
                <span class="subheading">Our values</span>
                <h2 class="mb-4">We value our Customer the Most</h2>
              </div>
            </div>
            <div class="pl-md-5 ml-md-5 mb-5">
              <p>
                We are here to do everything for you and make it easy for you to
                have what you want in no days. You are our primary concern.
              </p>
            </div>
          </div>
          <div
            class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
            style="background-image: url('assets/img/web/service.jpg');"
          ></div>
        </div>
      </div>
    </section>

    <section
      class="ftco-section ftco-counter img"
      id="section-counter"
      style="background-image: url(images/bg_1.jpg);"
      >
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div
            class="col-md-7 text-center heading-section heading-section-white ftco-animate"
          >
            <h2 class="mb-4">Some Facts</h2>
          </div>
        </div>

        <?php
            require 'database/connection.php';
            $customers = mysqli_num_rows(mysqli_query($con,"SELECT id FROM customers"));
            $houses = mysqli_num_rows(mysqli_query($con,"SELECT id FROM houses"));
            $lands = mysqli_num_rows(mysqli_query($con,"SELECT id FROM lands"));
            $subscribers = mysqli_num_rows(mysqli_query($con,"SELECT id FROM subscribers"));
            $deals = mysqli_num_rows(mysqli_query($con,"SELECT id FROM requests"));
        ?>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?php echo $customers?>">0</strong>
                    <span>Customers</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?php echo $houses+$lands?>">0</strong>
                    <span>Properties</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?php echo $subscribers?>">0</strong>
                    <span>Subscribers</span>
                  </div>
                </div>
              </div>
              <div
                class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate"
              >
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="<?php echo $deals?>">0</strong>
                    <span>Achievements</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  </section>
	
	<section class="bg-light my-5">
		<div class="container">
			<h2 class="text-center">Need a property</h2>
			<p class="text-center"> Don't hesitate to contact us or send us Email</p>
		</div>
	</section>

  <?php include "./common/footer.html";?>

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
  </body>
</html>
