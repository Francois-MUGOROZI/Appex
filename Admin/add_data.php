<?php

session_start() ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .form-control{
      border-radius:10px;
    }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <?php
  if (isset($_SESSION['user'])) {
    $user = ucfirst($_SESSION['user']);
    $cat = ucfirst($_SESSION['userCat']);
    $userImg = $_SESSION['userImg'];
  } else {
    header("location:login.php");
  }
  ?>
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Admin</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo"><b>Admin</b>Room</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo $userImg; ?>" class="user-image" alt="">
                <span class="hidden-xs"><?php echo $user; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo $userImg; ?>" class="img-circle" alt="">

                  <p>
                    <?php echo $user;
                    echo "-";
                    echo $cat; ?>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo $userImg; ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $user; ?></p>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
              <li><a href="../index.php" target="_blank"><i class="fa fa-circle-o"></i> Website</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Data view</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="data_view.php?data=houses"><i class="fa fa-circle-o"></i> Houses</a></li>
              <li><a href="data_view.php?data=lands"><i class="fa fa-circle-o"></i> Lands</a></li>
              <li><a href="data_view.php?data=customers"><i class="fa fa-circle-o"></i> Customers</a></li>
              <li><a href="data_view.php?data=sellers"><i class="fa fa-circle-o"></i> Sellers</a></li>
              <li><a href="data_view.php?data=requests"><i class="fa fa-circle-o"></i> Requests</a></li>
              <li><a href="data_view.php?data=comments"><i class="fa fa-circle-o"></i> Comments</a></li>
              <li><a href="data_view.php?data=subscribers"><i class="fa fa-circle-o"></i> Subscribers</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Add Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
              <li><a href="add_data.php?data=house"><i class="fa fa-circle-o"></i> Houses</a></li>
              <li><a href="add_data.php?data=land"><i class="fa fa-circle-o"></i> Lands</a></li>
            </ul>

          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Add Data</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      
      <?php
               //house variables
             $houseOwner = "";
             $houseOwnerLocation = "";
             $houseOwnerEmail = "";
             $houseOwnerPhone = "";
             $houseType = "";
             $houseSize = "";
             $houseRooms = "";
             $houseParkings = "";
             $houseCost = "";
             $houseNotes = "";
             $houseStatus = "";
             $houseImage = "";
             $houseLocation = "";
             $houseVisibility = "";
             $houseViews = "";
             //land variables
             
             $landOwner = "";
             $landOwnerLocation = "";
             $landOwnerEmail = "";
             $landOwnerPhone = "";
             $landType = "";
             $landSize = "";
             $landCost = "";
             $landNotes = "";
             $landStatus = "";
             $landImage = "";
             $landLocation = "";
             $landVisibility = "";
             $landViews = "";
             $id;
             
             require "../database/connection.php";
          
              if(isset($_GET['edit'])&&$_GET['edit']=='house'){
                 $id = $_GET['id'];
                 $houses = mysqli_query($con,"SELECT * FROM houses WHERE id=$id")->fetch_array();
                 $houseSeller = mysqli_query($con,"SELECT * FROM sellers WHERE sellerpropertyId=$id")->fetch_array();
                 $houseOwner = html_entity_decode($houses['houseSeller']);
                 $houseOwnerEmail = html_entity_decode($houseSeller['sellerEmail']);
                 $houseOwnerPhone = html_entity_decode($houseSeller['sellerPhone']);
                 $houseCost = html_entity_decode($houses['houseCost']);
                 $houseImage = html_entity_decode($houses['houseImage']);
                 $houseLocation = html_entity_decode($houses['houseLocation']);
                 $houseNotes = html_entity_decode($houses['houseNote']);
                 $houseParkings = html_entity_decode($houses['houseParkings']);
                 $houseRooms = html_entity_decode($houses['houseRooms']);
                 $houseSize = html_entity_decode($houses['houseSize']);
                 $houseType = html_entity_decode($houses['houseType']);
                 $houseStatus = html_entity_decode($houses['houseStatus']);
              }
        
              if(isset($_GET['edit'])&&$_GET['edit']=='land'){
                $id = $_GET['id'];
                $lands = mysqli_query($con,"SELECT * FROM lands WHERE id=$id")->fetch_array();
                $landSeller = mysqli_query($con,"SELECT * FROM sellers WHERE sellerpropertyId=$id")->fetch_array();
                
                $landOwner = html_entity_decode($lands['landSeller']);
                $landOwnerEmail = html_entity_decode($landSeller['sellerEmail']);
                $landOwnerPhone = html_entity_decode($landSeller['sellerPhone']);
                $landCost = html_entity_decode($lands['landCost']);
                $landImage = html_entity_decode($lands['landImage']);
                $landLocation = html_entity_decode($lands['landLocation']);
                $landNotes = html_entity_decode($lands['landNote']);
                $landSize = html_entity_decode($lands['landSize']);
                $landType = html_entity_decode($lands['landType']);
                $landStatus = html_entity_decode($lands['landStatus']);
              }
      ?>
      <!-- Main content -->
      <section class="content">
        <?php

        //add house data
        if (isset($_GET['data']) && $_GET['data'] == "house") { ?>
          <div class="container px-md-5 px-sm-2 justify-content-center">
            <h4 class="page-title">Add House to the Database</h4>
            <form action="../database/addData.php?data=house" method="POST" id="house-add-form" enctype="multipart/form-data">
              <input type="hidden" name="update" value="update">
              <div class="form-group">
                <label for="houseOwner">House Owner</label>
                <input type="text" 
                name="houseOwner" id="houseOwner" 
                value = "<?php echo $houseOwner;?>"
                class="form-control py-4 border-0"
                required>
              </div>

              <div class="form-group">
                <label for="houseOwnerEmail">House Owner Email</label>
                <input type="email" 
                name="houseOwnerEmail" 
                id = "houseOwnerEmail" 
                value = "<?php echo $houseOwnerEmail;?>"
                class="form-control py-4 border-0 "
                inputmode="email">
              </div>
              <div class="form-group">
                <label for="houseOwnerPhone">House Owner Phone</label>
                <input type="tel" 
                name="houseOwnerPhone" 
                id = "houseOwnerPhone" 
                value = "<?php echo $houseOwnerPhone;?>"
                class="form-control py-4 border-0 ">
              </div>
              <div class="form-group">
                <label for="houseType">House Type</label>
                <input type="text" 
                name="houseType" 
                id = "houseType" 
                value = "<?php echo $houseType;?>"
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="houseSize">House Size</label>
                <input type="text" 
                name="houseSize" 
                id = "houseSize" 
                value = "<?php echo $houseSize;?>"
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="houseLocation">House Location</label>
                <input type="text" 
                name="houseLocation" 
                id = "houseLocation" 
                value = "<?php echo $houseLocation;?>" 
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="houseRooms">House Rooms</label>
                <input type="number" 
                name="houseRooms" 
                id = "houseRooms" 
                value = "<?php echo $houseRooms;?>"
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="houseParkings">House Parking</label>
                <input type="number" 
                name="houseParkings" 
                id="houseParkings" 
                value = "<?php echo $houseParkings;?>" 
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="houseCost">House Cost</label>
                <input type="text" 
                name="houseCost" 
                id = "houseCost" 
                value = "<?php echo $houseCost;?>" 
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="houseImage">House Image</label>
                <input type="file" 
                name="houseImage" 
                id = "houseImage" 
                value = "<?php echo $houseImage;?>"
                class="form-control border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="houseViews[]">House Views</label>
                <input type="file" name="houseViews[]" value = "<?php echo $houseViews;?>" multiple class="form-control border-0 ">
              </div>
              <div class="form-group">
                <label for="houseNotes">House Notes</label>
                <textarea name="houseNotes" rows="6" value = "<?php echo $houseNote;?>" class="form-control py-4 border-0 "></textarea>
              </div>
              <div class="form-group">
                <label for="houseStatus">House Status</label>
                <select name="houseStatus" id="houseStatus" class="form-control border-0 ">
                  <option value="For Sale">For Sale</option>
                  <option value="In Deal">In Deal</option>
                  <option value="Sold">Sold</option>
                </select>
              </div>
              <div class="form-group">
                <label for="houseVisibility">House Visibility</label>
                <select name="houseVisibility" id="houseVisibility" class="form-control border-0 ">
                  <option value="Hidden">Hidden</option>
                  <option value="Visible" selected>Visible</option>
                </select>
              </div>
              <div class="form-group">
                  <?php if(isset($_GET['edit'])&&$_GET['edit']=='house'){?>
                    <input type="submit" name="houseSubmit" value="Update" class="btn btn-primary">
                <?php }
                else{?>
                      <input type="submit" name="houseSubmit" value="Add" class="btn btn-primary">
                <?php }
                  
                  ?>
                
              </div>
            </form>
          </div>
        <?php }

        //add land
        if (isset($_GET['data']) && $_GET['data'] == "land") { ?>
          <div class="container px-md-5 px-sm-2 justify-content-center">
            <h4 class="page-title">Add Land to the Database</h4>
            <form action="../database/addData.php?data=land" method="POST" id="land-add-form" enctype="multipart/form-data">
               <input type="hidden" name="update" value="update">
              <div class="form-group">
                <label for="landOwner">Land Owner</label>
                <input type="text" 
                name="landOwner" 
                id = "landOwner" 
                value = "<?php echo $landOwner;?>"
                class="form-control py-4 border-0  "
                required>
              </div>

              <div class="form-group">
                <label for="landOwnerEmail">Land Owner Email</label>
                <input type="email" 
                name="landOwnerEmail" 
                id = "landOwnerEmail" 
                value = "<?php echo $landOwnerEmail;?>" 
                class="form-control py-4 border-0 "
                inputmode="email">
              </div>
              <div class="form-group">
                <label for="landOwnerPhone">Land Owner Phone</label>
                <input type="tel" 
                name="landOwnerPhone" 
                id = "landOwnerPhone" 
                value = "<?php echo $landOwnerPhone;?>" 
                class="form-control py-4 border-0 ">
              </div>
              <div class="form-group">
                <label for="landType">Land Type</label>
                <input type="text" 
                name="landType" 
                id = "landType" 
                value = "<?php echo $landType;?>"
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="landSize">Land Size</label>
                <input type="text" 
                name="landSize" 
                id = "landSize" 
                value = "<?php echo $landSize;?>"
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="landLocation">Land Location</label>
                <input type="text" 
                name="landLocation" 
                id = "landLocation" 
                value = "<?php echo $landLocation;?>" 
                class="form-control py-4 border-0 "
                required>
              </div>

              <div class="form-group">
                <label for="landCost">Land Cost</label>
                <input type="text" 
                name="landCost" 
                id = "landCost" 
                value = "<?php echo $landCost;?>" 
                class="form-control py-4 border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="landImage">Land Image</label>
                <input type="file" 
                name="landImage" 
                id = "landImage" 
                value = "<?php echo $landImage;?>"
                class="form-control border-0 "
                required>
              </div>
              <div class="form-group">
                <label for="landViews[]">Land Views</label>
                <input type="file" name="landViews[]" value = "<?php echo $landViews;?>" multiple class="form-control border-0 ">
              </div>
              <div class="form-group">
                <label for="landNotes">Land Notes</label>
                <textarea name="landNotes" rows="6"value = "<?php echo $landNote;?>" class="form-control py-4 border-0 "></textarea>
              </div>
              <div class="form-group">
                <label for="landStatus">Land Status</label>
                <select name="landStatus" id="landStatus" class="form-control border-0 ">
                  <option value="For Sale">For Sale</option>
                  <option value="In Deal">In Deal</option>
                  <option value="Sold">Sold</option>
                </select>
              </div>
              <div class="form-group">
                <label for="landVisibility">Land Visibility</label>
                <select name="landVisibility" id="landVisibility" class="form-control border-0 ">
                  <option value="Hidden">Hidden</option>
                  <option value="Visible" selected>Visible</option>
                </select>
              </div>
              <div class="form-group">
                <?php if(isset($_GET['edit'])&&$_GET['edit']=='land'){?>
                      <input type="submit" name="landSubmit" value="Update" class="btn btn-primary">
                  <?php }
                  else{?>
                        <input type="submit" name="landSubmit" value="Add" class="btn btn-primary">
                  <?php }
                    
                    ?>
               
              </div>
            </form>
          </div>
        <?php }

        ?>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2019 <a href="https://adminlte.io">AdminRoom</a>.</strong> All rights
      reserved.
    </footer>

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    
</body>

</html>