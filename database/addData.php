<?php

    session_start();
   //get connection
   require "./connection.php";

   //Add new house to database
   if(isset($_GET['data']) && $_GET['data']=='house'){
       $houseOwner = parser($_POST['houseOwner'],$con);
       $houseOwnerEmail = parser($_POST['houseOwnerEmail'],$con);
       $houseOwnerPhone = parser($_POST['houseOwnerPhone'],$con);
       $houseType = parser($_POST['houseType'],$con);
       $houseSize = parser($_POST['houseSize'],$con);
       $houseRooms = parser($_POST['houseRooms'],$con);
       $houseParkings = parser($_POST['houseParkings'],$con);
       $houseCost = parser($_POST['houseCost'],$con);
       $houseNotes = parser($_POST['houseNotes'],$con);
       $houseStatus = parser($_POST['houseStatus'],$con);
       $houseImage = "";
       $houseLocation = parser($_POST['houseLocation'],$con);
       $houseVisibility = parser($_POST['houseVisibility'],$con);
       $houseViews = "";

       //handle house image
       if(isset($_FILES['houseImage'])){
           $targetdir = "../assets/img/houses/";
           $file = $targetdir . basename($_FILES['houseImage']['name']);
           if(move_uploaded_file($_FILES['houseImage']['tmp_name'],$file)){
               $houseImage = $file;
           }
       }

       //handle multiple files
       if(isset($_FILES['houseViews'])){
           $total = count($_FILES['houseViews']['name']);
           for($i=0; $i<$total; $i++){
               $temp = $_FILES['houseViews']['tmp_name'][$i];
               if($temp!=""){
                   $newPath = "../assets/img/houses/" . $_FILES['houseViews']['name'][$i];
                   if(move_uploaded_file($temp,$newPath)){
                       $houseViews = $houseViews.$newPath . ',';
                   }
               }
           }
       }

       //add to database
        $sql = "INSERT INTO houses (
                 houseType,
                 houseSeller,
                 houseSize,
                 houseLocation,
                 houseImage,
                 houseNote,
                 houseCost,
                 houseStatus,
                 houseRooms,
                 houseParkings,
                 houseOptions,
                 houseVisibility

             )
            VALUES (
            '$houseType',
            '$houseOwner',
            '$houseSize',
            '$houseLocation',
            '$houseImage',
            '$houseNotes',
            '$houseCost',
            '$houseStatus',
            '$houseRooms',
            '$houseParkings',
            '$houseViews',
            '$houseVisibility'
        )";

        if(mysqli_query($con,$sql)){
            $houseID = mysqli_insert_id($con);
              $nwSql = "INSERT INTO sellers (
                     sellerName,
                     sellerPhone,
                     sellerEmail,
                     sellerProperty,
                     sellerPropertyId
              )
              VALUES (
                   '$houseOwner',
                   '$houseOwnerPhone',
                   '$houseOwnerEmail',
                   'house',
                   '$houseID' 
              )";  
            if(mysqli_query($con,$nwSql)){
                   
            }
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record added successfully!"; 
            header('location:../Admin/data_view.php?data=houses');
        }

        else{
            $_SESSION['insert'] = "bg-warning";
            $_SESSION['message'] = "Record not added successfully! Retry"; 
            header('location:../Admin/add_data.php?data=house');
         }
   }

   //Add new Land to database
   if(isset($_GET['data']) && $_GET['data']=='land'){
    $landOwner = parser($_POST['landOwner'],$con);
    $landOwnerEmail = parser($_POST['landOwnerEmail'],$con);
    $landOwnerPhone = parser($_POST['landOwnerPhone'],$con);
    $landType = parser($_POST['landType'],$con);
    $landSize = parser($_POST['landSize'],$con);
    $landLocation = parser($_POST['landLocation'],$con);
    $landCost = parser($_POST['landCost'],$con);
    $landNotes = parser($_POST['landNotes'],$con);
    $landStatus = parser($_POST['landStatus'],$con);
    $landVisibility = parser($_POST['landVisibility'],$con);
    $landImage = "";
    $landViews = "";

    //handle house image
    if(isset($_FILES['landImage'])){
        $targetdir = "../assets/img/lands/";
        $file = $targetdir . basename($_FILES['landImage']['name']);
        if(move_uploaded_file($_FILES['landImage']['tmp_name'],$file)){
            $landImage = $file;
        }
    }

    //handle multiple files
    if(isset($_FILES['landViews'])){
        $total = count($_FILES['landViews']['name']);
        for($i=0; $i<$total; $i++){
            $temp = $_FILES['landViews']['tmp_name'][$i];
            if($temp!=""){
                $newPath = "../assets/img/lands/" . $_FILES['landViews']['name'][$i];
                if(move_uploaded_file($temp,$newPath)){
                    $landViews = $landViews.$newPath . ',';
                }
            }
        }
    }

    //add to database
     $sql = "INSERT INTO lands (
              landType,
              landSeller,
              landSize,
              landLocation,
              landImage,
              landNote,
              landCost,
              landStatus,
              landOptions,
              landVisibility

          )
         VALUES (
         '$landType',
         '$landOwner',
         '$landSize',
         '$landLocation',
         '$landImage',
         '$landNotes',
         '$landCost',
         '$landStatus',
         '$landViews',
         '$landVisibility'
     )";

     if(mysqli_query($con,$sql)){
         $landID = mysqli_insert_id($con);
           $nwSql = "INSERT INTO sellers (
                  sellerName,
                  sellerPhone,
                  sellerEmail,
                  sellerProperty,
                  sellerPropertyId
           )
           VALUES (
                '$landOwner',
                '$landOwnerPhone',
                '$landOwnerEmail',
                'land',
                '$landID' 
           )";  
         if(mysqli_query($con,$nwSql)){

         }
         $_SESSION['insert'] = "bg-success";
         $_SESSION['message'] = "Record added successfully!"; 
         header('location:../Admin/data_view.php?data=lands');
     }

     else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not added successfully! Retry"; 
        header('location:../Admin/add_data.php?data=land');
      }
   }

   //Update house Table
   if(isset($_GET['data']) && $_GET['data']=='house' && isset($_GET['update'])&& $_GET['update']=='update'){
    $houseOwner = parser($_POST['houseOwner'],$con);
    $houseOwnerEmail = parser($_POST['houseOwnerEmail'],$con);
    $houseOwnerPhone = parser($_POST['houseOwnerPhone'],$con);
    $houseType = parser($_POST['houseType'],$con);
    $houseSize = parser($_POST['houseSize'],$con);
    $houseRooms = parser($_POST['houseRooms'],$con);
    $houseParkings = parser($_POST['houseParkings'],$con);
    $houseCost = parser($_POST['houseCost'],$con);
    $houseNotes = parser($_POST['houseNotes'],$con);
    $houseStatus = parser($_POST['houseStatus'],$con);
    $houseImage = "";
    $houseLocation = parser($_POST['houseLocation'],$con);
    $houseVisibility = parser($_POST['houseVisibility'],$con);
    $houseViews = "";
    $id = $_GET['id'];

    //handle house image
    if(isset($_FILES['houseImage'])){
        $targetdir = "../assets/img/houses/";
        $file = $targetdir . basename($_FILES['houseImage']['name']);
        if(move_uploaded_file($_FILES['houseImage']['tmp_name'],$file)){
            $houseImage = $file;
        }
    }

    //handle multiple files
    if(isset($_FILES['houseViews'])){
        $total = count($_FILES['houseViews']['name']);
        for($i=0; $i<$total; $i++){
            $temp = $_FILES['houseViews']['tmp_name'][$i];
            if($temp!=""){
                $newPath = "../assets/img/houses/" . $_FILES['houseViews']['name'][$i];
                if(move_uploaded_file($temp,$newPath)){
                    $houseViews = $houseViews.$newPath . ',';
                }
            }
        }
    }

    //add to database
     $sql = "UPDATE TABLE houses 
              houseType = '$houseType',
              houseSeller =  '$houseOwner',
              houseSize = '$houseSize',
              houseLocation = '$houseLocation',
              houseImage = '$houseImage',
              houseNote = '$houseNotes',
              houseCost = '$houseCost',
              houseStatus = '$houseStatus',
              houseRooms = '$houseRooms',
              houseParkings = '$houseParkings',
              houseOptions = '$houseViews',
              houseVisibility = '$houseVisibility'
            WHERE id = '$id'";

     if(mysqli_query($con,$sql)){
        $_SESSION['insert'] = "bg-success";
        $_SESSION['message'] = "Record updated successfully!";
        header('location:../Admin/data_view.php?data=houses'); 
     }

     else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not updated successfully! Retry";
        header("location:../Admin/data_view.php?data=houses"); 
      }
   }

   //Update land table
   if(isset($_GET['data']) && $_GET['data']=='land' && isset($_GET['update'])&& $_GET['update']=='update'){
    $landOwner = parser($_POST['landOwner'],$con);
    $landOwnerEmail = parser($_POST['landOwnerEmail'],$con);
    $landOwnerPhone = parser($_POST['landOwnerPhone'],$con);
    $landType = parser($_POST['landType'],$con);
    $landSize = parser($_POST['landSize'],$con);
    $landLocation = parser($_POST['landLocation'],$con);
    $landCost = parser($_POST['landCost'],$con);
    $landNotes = parser($_POST['landNotes'],$con);
    $landStatus = parser($_POST['landStatus'],$con);
    $landVisibility = parser($_POST['landVisibility'],$con);
    $landImage = "";
    $landViews = "";
    $id = $_GET['id'];

    //handle house image
    if(isset($_FILES['landImage'])){
        $targetdir = "../assets/img/lands/";
        $file = $targetdir . basename($_FILES['landImage']['name']);
        if(move_uploaded_file($_FILES['landImage']['tmp_name'],$file)){
            $houseImage = $file;
        }
    }

    //handle multiple files
    if(isset($_FILES['landViews'])){
        $total = count($_FILES['landViews']['name']);
        for($i=0; $i<$total; $i++){
            $temp = $_FILES['landViews']['tmp_name'][$i];
            if($temp!=""){
                $newPath = "../assets/img/lands/" . $_FILES['landViews']['name'][$i];
                if(move_uploaded_file($temp,$newPath)){
                    $landViews = $landViews.$newPath . ',';
                }
            }
        }
    }

    //add to database
     $sql = "UPDATE TABLE lands SET
              landType =  '$landType',
              landSeller = '$landOwner',
              landSize ='$landSize',
              landLocation = '$landLocation',
              landImage = '$landImage',
              landNote = '$landNotes',
              landCost = '$landCost',
              landStatus = '$landStatus',
              landOptions =  '$landViews',
              landVisibility =  '$landVisibility',

           WHERE id = '$id' ";

     if(mysqli_query($con,$sql)){
        $_SESSION['insert'] = "bg-success";
        $_SESSION['message'] = "Record updated successfully!"; 
        header('location:../Admin/data_view.php?data=lands');
     }

     else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not updated successfully! Retry";
        header("location:../Admin/data_view.php?data=lands"); 
      }
   }

   //Method to escape string input
   function parser($str, $con)
    {
        $st = htmlspecialchars($str);
        $st2 = htmlentities($st);
        return mysqli_real_escape_string($con, $st2);
    }

   $con->close();
?>