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
  </head>

  <body>

      <?php include './common/header.html';?>

      <!--Get data from database-->
      <?php
           require './database/connection.php';
           //first 2 houses for banner
           $sql = "SELECT * FROM houses WHERE houseVisibility='Visible' 
                   and houseStatus='For Sale' ORDER BY houseAddedAt DESC Limit 2";
           $houses2 = mysqli_query($con, $sql);
      ?>
    <!---SLiding top properties-->
    <section class="home-slider owl-carousel">
       <?php
         while ($row = $houses2->fetch_assoc()) {?>
            <div class="slider-item" style="background-image:url('<?php echo str_replace('../', '', $row['houseImage'])?>');">
              <div class="overlay"></div>
                <div class="container">
                  <div
                    class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end"
                   >
                    <div class="col-md-6 text p-4 ftco-animate">
                      <h1 class="mb-3"><?php echo html_entity_decode($row['houseLocation']);?></h1>
                      <span class="location d-block mb-3"
                        ><i class="icon-my_location"></i> <?php echo html_entity_decode($row['houseLocation']);?></span
                      >
                      <p>
                      <?php echo html_entity_decode($row['houseNote']);?>
                      </p>

                      <div class="d-flex flex-row justify-content-center">
                        <div class="d-flex flex-column">
                          <i class="icon-area-chart"></i>
                          <small><?php echo html_entity_decode($row['houseSize']);?></small>
                        </div>
                        <div class="d-flex flex-column mx-auto">
                          <i class="icon-bed"></i>
                          <small><?php echo html_entity_decode($row['houseRooms']);?></small>
                        </div>
                        <div class="d-flex flex-column mx-auto">
                          <i class="icon-local_parking"></i>
                          <small><?php echo html_entity_decode($row['houseParkings']);?></small>
                        </div>
                        <div class="d-flex flex-column">
                          <i class="icon-home"></i>
                          <small><?php echo html_entity_decode($row['houseType']);?></small>
                        </div>
                      </div>
                      <div class="d-flex flex-row mt-5 justify-content-between">
                        <span class="price"><?php echo html_entity_decode($row['houseCost']);?></span>
                        <a href="property-single.php?data=house&id=<?php echo html_entity_decode($row['id']);?>" class="text-white p-3 px-4 bg-primary"
                          >View Details <span class="icon-plus ml-1"></span
                        ></a>
                        <a href="property-single.php?data=house&id=<?php echo html_entity_decode($row['id']);?>" class="text-white p-3 px-4 bg-primary">Request</a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        <?php }
       ?>

    </section>

    <!-- <section class="ftco-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 search-wrap">
            <h2 class="heading h5 d-flex align-items-center pr-4">
              <span class="ion-ios-search mr-3"></span> Search Property
            </h2>
            <form action="" class="search-property" method="POST">
              <div class="row">
                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label for="#">Property</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon">
                          <span class="ion-ios-arrow-down"></span>
                        </div>
                        <select name="property" id="" class="form-control">
                          <option value="house">House</option>
                          <option value="land">Land</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label for="#">Location</label>
                    <div class="form-field">
                      <div class="icon"><span class="icon-pencil"></span></div>
                      <input
                        type="text"
                        name = "location"
                        class="form-control"
                        placeholder="City/Locality Name"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label for="#">Property Type</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon">
                          <span class="ion-ios-arrow-down"></span>
                        </div>
                        <select name="type" id="type" class="form-control">
                          <option value="">Type</option>
                          <option value="commercial">Commercial</option>
                          <option value="office">- Office</option>
                          <option value="residential">Residential</option>
                          <option value="villa">Villa</option>
                          <option value="condominum">Condominium</option>
                          <option value="apartment">Apartment</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label for="#">Property Status</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon">
                          <span class="ion-ios-arrow-down"></span>
                        </div>
                        <select name="status" id="" class="form-control">
                          <option value="For Sale">For Sale</option>
                          <option value="sold">Sold</option>
                          <option value="in deal">In deal</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                
                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label for="#">Price Order</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon">
                          <span class="ion-ios-arrow-down"></span>
                        </div>
                        <select name="price" id="price" class="form-control">
                          <option value="min">Min Price</option>
                          <option value="max">Max Price</option>
                          <option value="med" selected>Medium Area</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label for="#">Area order</label>
                    <div class="form-field">
                      <select name="area" id = "area" class="form-control">
                          <option value="min">Min Area</option>
                          <option value="max">Max Area</option>
                          <option value="min" selected>Medium Area</option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="col-md align-self-end">
                  <div class="form-group">
                    <div class="form-field">
                      <input
                        type="submit"
                        value="Search"
                        name = "search"
                        class="form-control btn btn-primary"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->

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


  <section class="ftco-section bg-light">
      <div class="container">
			<div class="heading-section text-center ftco-animate ">
					<h2 class="mb-4">Recent Houses</h2>
			</div>
        <div class="row justify-content-center">
          <?php
               //get recent houses
            $sql = "SELECT * FROM houses WHERE houseVisibility='Visible'
            and houseStatus='For Sale' ORDER BY houseAddedAt DESC LIMIT 3";
            $houses = mysqli_query($con,$sql);
            if(mysqli_num_rows($houses)==0){

            }
            else{
              while($row = $houses->fetch_assoc()){?>
                  <div class="col-md-4 ftco-animate">
                    <div class="properties">
                      <a
                        href="property-single.php?data=house&id=<?php echo $row['id'];?>"
                        class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url('<?php echo str_replace('../','',$row['houseImage']);?>');"
                      >
                        <div
                          class="icon d-flex justify-content-center align-items-center"
                        >
                          <span class="icon-search2"></span>
                        </div>
                      </a>
                      <div class="text p-3">
                        <span class="status For Sale"><?php echo html_entity_decode($row['houseStatus']);?></span>
                        <div class="text p-4 ftco-animate">
                          <h4 class="mb-3"><?php echo html_entity_decode($row['houseLocation']);?></h4>
                          <span class="location d-block mb-3"
                            ><i class="icon-my_location"></i> <?php echo html_entity_decode($row['houseLocation']);?></span
                          >
                          <p>
                             <?php echo html_entity_decode($row['houseNote']);?>
                          </p>

                          <div class="d-flex flex-row justify-content-around">
                            <div class="d-flex flex-column">
                              <i class="icon-area-chart"></i>
                              <small><?php echo html_entity_decode($row['houseSize']);?></small>
                            </div>
                            <div class="d-flex flex-column ">
                              <i class="icon-bed"></i>
                              <small><?php echo html_entity_decode($row['houseRooms']);?></small>
                            </div>
                            <div class="d-flex flex-column ">
                              <i class="icon-local_parking"></i>
                              <small><?php echo html_entity_decode($row['houseParkings']);?></small>
                            </div>
                            <div class="d-flex flex-column">
                              <i class="icon-home"></i>
                              <small><?php echo html_entity_decode($row['houseType']);?></small>
                            </div>
                          </div>
                          <div class="d-flex flex-row mt-5 justify-content-between">
                            <span class="text-danger"><?php echo html_entity_decode($row['houseCost']);?></span>
                            <a href="property-single.php?data=house&id=<?php echo $row['id'];?>" class="text-white py-2 px-1 bg-primary"
                              >View Details <span class="icon-plus ml-1"></span
                            ></a>
                            <a href="register.php?who=customer&data=house&id=<?php echo $row['id'];?>" class="text-white py-2 px-1 bg-primary"
                              >Request</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
             <?php }
            }
          ?>

        </div>

        <div class="row mt-2">
          <div class="col text-center">
            <div class="block-27">
              <a href="property.php?all=houses" name="loadHouses" class="btn bg-primary text-white px-5">Load all Houses</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
	</section>

  <section class="ftco-section bg-light">
			<div class="container">
				  <div class="heading-section text-center ftco-animate ">
						  <h2 class="mb-4">Recent Lands</h2>
				  </div>
			  <div class="row justify-content-center">

              <?php
                  //get recent houses
                $sql = "SELECT * FROM lands WHERE landVisibility='Visible'
                and landStatus='For Sale' ORDER BY landAddedAt DESC LIMIT 3";
                $lands = mysqli_query($con,$sql);
                if(mysqli_num_rows($lands)==0){

                } 
                else{
                  while($row = $lands->fetch_assoc()){?>
                    <div class="col-md-4 ftco-animate">
                      <div class="properties">
                      <a
                        href="property-single.php?data=land&id=<?php echo $row['id'];?>"
                        class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url('<?php echo str_replace('../','',$row['landImage']);?>');"
                      >
                        <div
                        class="icon d-flex justify-content-center align-items-center"
                        >
                        <span class="icon-search2"></span>
                        </div>
                      </a>
                      <div class="text p-3">
                        <span class="status For Sale"><?php echo html_entity_decode($row['landStatus']);?></span>
                        <div class="text p-4 ftco-animate">
                        <h4 class="mb-3"><?php echo html_entity_decode($row['landLocation']);?></h4>
                        <span class="location d-block mb-3"
                          ><i class="icon-my_location"></i> <?php echo html_entity_decode($row['landLocation']);?></span
                        >
                        <p>
                           <?php echo html_entity_decode($row['landNote']);?>
                        </p>
                
                        <div class="d-flex flex-row justify-content-between">
                          <div class="d-flex flex-column">
                          <i class="icon-area-chart"></i>
                          <small><?php echo html_entity_decode($row['landSize']);?></small>
                          </div>
                          
                          <div class="d-flex flex-column">
                          <i class="icon-home"></i>
                          <small><?php echo html_entity_decode($row['landType']);?></small>
                          </div>
                        </div>
                        <div class="d-flex flex-row mt-5 justify-content-between">
                          <span class="text-danger"><?php echo html_entity_decode($row['landCost']);?></span>
                          <a href="property-single.php?data=land&id=<?php echo $row['id'];?>" class="text-white py-2 px-1 bg-primary"
                          >View Details <span class="icon-plus ml-1"></span
                          ></a>
                          <a href="register.php?who=customer&data=land&id=<?php echo $row['id'];?>" class="text-white py-2 px-1 bg-primary"
                          >Request</a
                          >
                        </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  <?php }
                } 
              ?>
        </div>
        
			  <div class="row mt-2">
				<div class="col text-center">
				  <div class="block-27">
					<a href="property.php?all=lands" class="btn bg-primary text-white px-5">Load all Lands</a>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
	</section>



    <!-- <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Read Articles</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20"
                style="background-image: url('images/image_1.jpg');"
              >
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3">
                  <a href="#"
                    >Even the all-powerful Pointing has no control about the
                    blind texts</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20"
                style="background-image: url('images/image_2.jpg');"
              >
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3">
                  <a href="#"
                    >Even the all-powerful Pointing has no control about the
                    blind texts</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20"
                style="background-image: url('images/image_3.jpg');"
              >
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3">
                  <a href="#"
                    >Even the all-powerful Pointing has no control about the
                    blind texts</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a
                href="blog-single.html"
                class="block-20"
                style="background-image: url('images/image_4.jpg');"
              >
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3">
                  <a href="#"
                    >Even the all-powerful Pointing has no control about the
                    blind texts</a
                  >
                </h3>
                <div class="meta mb-3">
                  <div><a href="#">Dec 6, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="#" class="meta-chat"
                      ><span class="icon-chat"></span> 3</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

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
  </body>
</html>
