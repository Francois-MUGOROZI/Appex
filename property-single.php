<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Appex - Estate - Property</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   
    <?php include "./common/header.html";?>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('assets/img/web/propertyFull.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Property Single</span></p>
            <h1 class="mb-3 bread">Property View</h1>
          </div>
        </div>
      </div>
    </div>
		 
	<section class="ftco-section">
      <div class="container">
           <div class="row">

				<?php
					require "database/connection.php";
					
					if(isset($_GET['data'])&&$_GET['data']=='house'){
						$id = $_GET['id'];
						$sql = "SELECT * FROM houses WHERE id=$id";
						$house = mysqli_query($con,$sql)->fetch_assoc();
						//get house views
						$houseViews = array();
						if($house['houseOptions']==''){}
						else{
							$houseViews = explode(',',$house['houseOptions']);
						}
						?>
														
														
									
							<div class="col-md-12 ftco-animate">
								
								<div class="row justify-content-center">
										<img style="max-width:98%;min-width:60%;min-height:300px;"
										src="<?php echo str_replace('../','',$house['houseImage']);?>">
								</div>
								
								
								<div class="col-md-12 Properties-single mt-4 mb-2 ftco-animate">
									<!-- <h2>Crowne Plaza Columbus</h2> -->
									<p class="rate mb-4">
										<span class="loc"><a href="#"><i class="icon-map"></i> <?php echo html_entity_decode($house['houseLocation']);?></a></span>
											</p>
											<p> <?php echo html_entity_decode($house['houseNote']);?></p>
											<div class="d-md-flex mt-5 mb-5">
												<ul>
													<li><span>Area: </span> <?php echo html_entity_decode($house['houseSize']);?></li>
													<li><span>Bed Rooms: </span> <?php echo html_entity_decode($house['houseRooms']);?></li>
													<li><span>Parking Areas: </span> <?php echo html_entity_decode($house['houseParkings']);?></li>
													<li><span>Type: </span> <?php echo html_entity_decode($house['houseType']);?></li>
												</ul>
												<ul class="ml-md-5">
													<li><span>Status: </span> <?php echo html_entity_decode($house['houseStatus']);?></li>
													<li><span>Cost: </span> <?php echo html_entity_decode($house['houseCost']);?></li>
												</ul>
											</div>
								</div>
								
								
								<div class="col-md-12 properties-single ftco-animate mb-5 mt-2">
									<h3 class="mb-4">Take A Tour</h3>
									<div class="block-16 row mb-4">
									<?php
										if(empty($houseViews)){?>
											<h2>No Other Preview Available</h2>
										<?php }
											else{
												foreach($houseViews as $view){?>
													<div data-bs-hover-animate="pulse" class="col-md-4 col-sm-12">
														<img
														src="<?php echo str_replace('../','',$view);?>"
														data-bs-hover-animate="pulse"
														class="card-img"
														alt = "No other preview available"
														/>
													</div>
											<?php  }
											}?>
									</div>
									<a href="register.php?who=customer&data=house&id=<?php echo $house['id'];?>" class="text-white py-2 px-2 bg-primary mt-4">Request</a>
								</div>

					<?php
					}
					if(isset($_GET['data'])&&$_GET['data']=='land'){
						$id = $_GET['id'];
						$sql = "SELECT * FROM lands WHERE id=$id";
						$land = mysqli_query($con,$sql)->fetch_assoc();
						//get land views
						$landViews = array();
						if($land['landOptions']==''){}
						else{
							$landViews = explode(',',$land['landOptions']);
						}
						
						?>
					         
    
						<div class="col-md-12 ftco-animate">
							
							<div class="row justify-content-center">
									<img style="max-width:98%;min-width:60%;min-height:300px;"
									src="<?php echo str_replace('../','',$land['landImage']);?>">
							</div>
							
							
							<div class="col-md-12 Properties-single mt-4 mb-2 ftco-animate">
								<!-- <h2>Crowne Plaza Columbus</h2> -->
								<p class="rate mb-4">
									<span class="loc"><a href="#"><i class="icon-map"></i> <?php echo html_entity_decode($land['landLocation']);?></a></span>
										</p>
										<p> <?php echo html_entity_decode($land['landNote']);?></p>
										<div class="d-md-flex mt-5 mb-5">
											<ul>
												<li><span>Area: </span> <?php echo html_entity_decode($land['landSize']);?></li>
												<li><span>Type: </span> <?php echo html_entity_decode($land['landType']);?></li>
											</ul>
											<ul class="ml-md-5">
												<li><span>Status: </span> <?php echo html_entity_decode($land['landStatus']);?></li>
												<li><span>Cost: </span> <?php echo html_entity_decode($land['landCost']);?></li>
											</ul>
										</div>
							</div>
							
							
							<div class="col-md-12 properties-single ftco-animate mb-5 mt-2">
								<h3 class="mb-4">Take A Tour</h3>
								<div class="block-16 row mb-4">
								  <?php
									if(empty($landViews)){?>
										<h2>No Other Preview Available</h2>
									<?php }
										else{
											foreach($landViews as $view){?>
												<div data-bs-hover-animate="pulse" class="col-md-4 col-sm-12">
													<img
													src="<?php echo str_replace('../','',$view);?>"
													data-bs-hover-animate="pulse"
													class="card-img"
													alt = "No other preview available"
													/>
												</div>
										<?php  }
										}?>
								</div>
								<a href="register.php?who=customer&data=house&id=<?php echo $land['id'];?>" class="text-white py-2 px-2 bg-primary mt-4">Request</a>
							</div>

					<?php }
				?>


          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Related Properties</h4>
          			<div class="row">

					  <?php
					      if($_GET['data']=='house'){
							  $id = $_GET['id'];
							  $sql = "SELECT * FROM houses WHERE id!=$id ORDER BY houseAddedAt DESC LIMIT 3";
							  $houses = mysqli_query($con,$sql);
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
												<span class="status sale"><?php echo html_entity_decode($row['houseStatus']);?></span>
												<div class="text p-4 ftco-animate">
												<h4 class="mb-3"><?php echo html_entity_decode($row['houseLocation']);?></h4>
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

						  if($_GET['data']=='land'){
							$id = $_GET['id'];
							$sql = "SELECT * FROM lands WHERE id!=$id ORDER BY landAddedAt DESC LIMIT 3";
							$lands = mysqli_query($con,$sql);
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
											  <span class="status sale"><?php echo html_entity_decode($row['landStatus']);?></span>
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
				</div>

            </div>
        </div>
    </section> <!-- .section -->
		
    <?php include "./common/footer.html";?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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