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
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <?php
    if(isset($_SESSION['user'])){
      $user = ucfirst($_SESSION['user']);
      $cat = ucfirst($_SESSION['userCat']);
      $userImg = $_SESSION['userImg'];
    }
    else{
      header("location:login.php");
    }
  ?>
  <div class="wrapper">
       
      <!--Display message from database update or delete--->
      <?php
          if(isset($_SESSION['insert'])&&$_SESSION['insert']=='bg-success'){?>
             <div class="container-fluid bg-success">
                 <h2 class="text-center"><?php echo $_SESSION['message']?></h2>
             </div>
         <?php $_SESSION['insert']='';$_SESSION['message']='';}
          if(isset($_SESSION['insert'])&&$_SESSION['insert']=='bg-warning'){?>
             <div class="container-fluid bg-warning">
                 <h2 class="text-center"><?php echo $_SESSION['message']?></h2>
             </div>
         <?php 
          $_SESSION['insert']='';
          $_SESSION['message']='';
        }
      ?>

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Admin</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>Room</span>
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
                <img src="<?php echo $userImg;?>" class="user-image" alt="">
                <span class="hidden-xs"><?php echo $user;?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo $userImg;?>" class="img-circle" alt="">

                  <p>
                    <?php echo $user; echo "-"; echo $cat;?>
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
            <img src="<?php echo $userImg;?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $user;?></p>
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
          <li><a href="#"><i class="fa fa-dashboard"></i> View Data</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
              
                <?php
                  require '../database/connection.php';
                  //checking sessions
                  if(isset($_GET['data'])&&$_GET['data']=='houses'){
                    //display house table
                    $sql = "SELECT * FROM houses ORDER BY houseAddedAt DESC";
                    $houses = mysqli_query($con,$sql);?>
                        <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>House Owner</th>
                              <th>House Location</th>
                              <th>House Type</th>
                              <th>House Size</th>
                              <th>House Rooms</th>
                              <th>House Parkings</th>
                              <th>House Cost</th>
                              <th>House Status</th>
                              <th>House Image</th>
                              <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    <?php 
                          $counter = 1;
                          while($house = $houses->fetch_assoc()){$id = $house['id'];?>
                                <tr>
                                  <td><?php echo $counter;?></td>
                                  <td><?php echo html_entity_decode($house['houseSeller']);?></td>
                                  <td><?php echo html_entity_decode($house['houseLocation']);?></td>
                                  <td><?php echo html_entity_decode($house['houseType']);?></td>
                                  <td><?php echo html_entity_decode($house['houseSize']);?></td>
                                  <td><?php echo html_entity_decode($house['houseRooms']);?></td>
                                  <td><?php echo html_entity_decode($house['houseParkings']);?></td>
                                  <td><?php echo html_entity_decode($house['houseCost']);?></td>
                                  <td><?php echo html_entity_decode($house['houseStatus']);?></td>
                                  <td> <img src="<?php echo $house['houseImage'];?>" alt="House Image" width="100" height="100"> </td>
                                  <td>
                                    <a href="add_data.php?data=house&edit=house&id=<?php echo $id;?>" class="btn btn-warning">Edit</a>
                                    <a href="../database/delete.php?data=house&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                        <?php $counter++;}
                  }
                   
                  if(isset($_GET['data'])&&$_GET['data']=='lands'){
                    //display land table
                    $sql = "SELECT * FROM lands ORDER BY landAddedAt DESC";
                    $lands = mysqli_query($con,$sql);?>
                        <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>Land Owner</th>
                              <th>Land Location</th>
                              <th>Land Type</th>
                              <th>Land Size</th>
                              <th>Land Cost</th>
                              <th>Land Status</th>
                              <th>Land Image</th>
                              <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <?php

                      $counter = 1;
                      while($land = $lands->fetch_assoc()){$id = $land['id'];?>
                            <tr>
                              <td><?php echo $counter;?></td>
                              <td><?php echo html_entity_decode($land['landSeller']);?></td>
                              <td><?php echo html_entity_decode($land['landLocation']);?></td>
                              <td><?php echo html_entity_decode($land['landType']);?></td>
                              <td><?php echo html_entity_decode($land['landSize']);?></td>
                              <td><?php echo html_entity_decode($land['landCost']);?></td>
                              <td><?php echo html_entity_decode($land['landStatus']);?></td>
                              <td> <img src="<?php echo $land['landImage'];?>" alt="Land Image" width="100" height="100"> </td>
                              <td>
                                <a href="add_data.php?data=land&edit=land&id=<?php echo $id;?>" class="btn btn-warning">Edit</a>
                                <a href="../database/delete.php?data=land&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                      <?php $counter++;}
                  }

                  if(isset($_GET['data'])&&$_GET['data']=='customers'){
                    //display land table
                    $sql = "SELECT * FROM customers ORDER BY customerAddedAt DESC";
                    $customers = mysqli_query($con,$sql);?>
                        <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>Customer Name</th>
                              <th>Customer Location</th>
                              <th>Customer Email</th>
                              <th>Customer Phone</th>
                              <th>Property</th>
                              <th>Customer Added</th>
                              <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                      $counter = 1;
                      while($customer = $customers->fetch_assoc()){$id = $customer['id'];?>
                            <tr>
                              <td><?php echo $counter;?></td>
                              <td><?php echo html_entity_decode($customer['customerName']);?></td>
                              <td><?php echo html_entity_decode($customer['customerLocation']);?></td>
                              <td><?php echo html_entity_decode($customer['customerEmail']);?></td>
                              <td><?php echo html_entity_decode($customer['customerPhone']);?></td>
                              <td><?php echo html_entity_decode($customer['property']);?></td>
                              <td><?php echo html_entity_decode($customer['customerAddedAt']);?></td>
                              <td>
                                <a href="../database/delete.php?delete=delete&data=request&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
                                <a href="../property-single.php?data=<?php echo $customer['property']?>&id=<?php echo $customer['propertyId'];?>" class="btn btn-success">Property</a>
                              </td>
                            </tr>
                      <?php $counter++;}
                  }

                  if(isset($_GET['data'])&&$_GET['data']=='sellers'){
                    //display land table
                    $sql = "SELECT * FROM sellers ORDER BY sellerAddedAt DESC";
                    $sellers = mysqli_query($con,$sql);?>
                        <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>Seller Name</th>
                              <th>Seller Email</th>
                              <th>Seller Phone</th>
                              <th>Seller Property</th>
                              <th>Seller PropertyID</th>
                              <th>Seller Added</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                      $counter = 1;
                      while($seller = $sellers->fetch_assoc()){$id = $seller['id'];?>
                            <tr>
                              <td><?php echo $counter;?></td>
                              <td><?php echo html_entity_decode($seller['sellerName']);?></td>
                              <td><?php echo html_entity_decode($seller['sellerEmail']);?></td>
                              <td><?php echo html_entity_decode($seller['sellerPhone']);?></td>
                              <td><?php echo html_entity_decode($seller['sellerProperty']);?></td>
                              <td><?php echo html_entity_decode($seller['sellerpropertyId']);?></td>
                              <td><?php echo html_entity_decode($seller['sellerAddedAt']);?></td>
                              <td>
                                <a href="../property-single.php?data=<?php echo $seller['sellerProperty']?>&id=<?php echo $seller['sellerpropertyId'];?>" class="btn btn-success">Property</a>
                              </td>
                            </tr>
                      <?php $counter++;}
                  }

                  if(isset($_GET['data'])&&$_GET['data']=='requests'){
                    //display land table
                    $sql = "SELECT * FROM requests ORDER BY addedAt DESC";
                    $requests = mysqli_query($con,$sql);?>
                        <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>Customer</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Location</th>
                              <th>Property</th>
                              <th>Description</th>
                              <th>Added</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                      $counter = 1;
                      while($request = $requests->fetch_assoc()){$id = $request['id'];?>
                            <tr>
                              <td><?php echo $counter;?></td>
                              <td><?php echo html_entity_decode($request['names']);?></td>
                              <td><?php echo html_entity_decode($request['email']);?></td>
                              <td><?php echo html_entity_decode($request['phone']); ?></td>
                              <td><?php echo html_entity_decode($request['locations']);?></td>
                              <td><?php echo html_entity_decode($request['property']);?></td>
                              <td><?php echo html_entity_decode($request['descriptions']);?></td>
                              <td><?php echo html_entity_decode($request['addedAt']);?></td>
                              <td>
                                <a href="../database/delete.php?delete=delete&data=request&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                      <?php $counter++;}
                  }

                  if(isset($_GET['data'])&&$_GET['data']=='comments'){
                    //display land table
                    $sql = "SELECT * FROM comments ORDER BY commentedAt DESC";
                    $comments = mysqli_query($con,$sql);?>
                        <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>Commenter</th>
                              <th>Commenter Email</th>
                              <th>Commented About</th>
                              <th>Comment</th>
                              <th>Commented</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                      $counter = 1;
                      while($comment = $comments->fetch_assoc()){$id = $comment['id'];?>
                            <tr>
                              <td><?php echo $counter;?></td>
                              <td><?php echo html_entity_decode($comment['commenter']);?></td>
                              <td><?php echo html_entity_decode($comment['commenterEmail']);?></td>
                              <td><?php echo html_entity_decode($comment['commentedAbout']);?></td>
                              <td><?php echo html_entity_decode($comment['comment']);?></td>
                              <td><?php echo html_entity_decode($comment['commentedAt']);?></td>
                              <td>
                                <a href="../database/delete.php?delete=delete&data=comment&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                      <?php $counter++;}
                  }

                  if(isset($_GET['data'])&&$_GET['data']=='subscribers'){
                    //display land table
                    $sql = "SELECT * FROM subscribers ORDER BY subscribedAt DESC";
                    $subscribers = mysqli_query($con,$sql);?>
                        <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>Subscriber Email</th>
                              <th>Subscribed</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                      $counter = 1;
                      while($subscriber = $subscribers->fetch_assoc()){$id = $subscriber['id'];?>
                            <tr>
                              <td><?php echo $counter;?></td>
                              <td><?php echo html_entity_decode($subscriber['subscriberEmail']);?></td>
                              <td><?php echo html_entity_decode($subscriber['subscribedAt']);?></td>
                              <td>
                                <a href="../database/delete.php?delete=delete&data=subscriber&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                      <?php $counter++;}
                  }
                ?>
              </tbody> 
              <tfoot>
                 <tr>
                 <td colspan="4">
                    
                    <a href="Extract.php?table=<?php echo $_GET['data'] ?>" class="btn btn-primary">Get Excel</a>
                    
                    </td>
                  </tr>
              </tfoot>
          </table>
        </div>
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