<?php
  require "connection.php";
  
  //Delete data from database
    if(isset($_GET['data'])&&$_GET['data']=='house'){
        $id = $_GET['id'];
        $file = mysqli_query($con,"SELECT houseImage FROM houses WHERE id='$id'")->fetch_array();
        $files = mysqli_query($con,"SELECT houseOptions FROM houses WHERE id='$id'")->fetch_array();
        $sql = "DELETE FROM houses WHERE id='$id'";
        if(mysqli_query($con,$sql)){
            mysqli_query($con,"DELETE FROM sellers WHERE sellerpropertyId='$id' and sellerProperty='house'");
            if($file['houseImage']!=''){
                unlink($file['houseImage']);
            }
            if($files['houseOptions']!=''){
                $imgs = explode(',',$files['houseOptions']);
                foreach($imgs as $im){
                    unlink($im);
                }
            }
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record deleted successfully!"; 
            header('location:../Admin/data_view.php?data=houses');
        }
        else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not deleted successfully! Retry"; 
        header('location:../Admin/data_view.php?data=houses');
        }
    }

    //Delete land from database
    if(isset($_GET['data'])&&$_GET['data']=='land'){
        $id = $_GET['id'];
        $file = mysqli_query($con,"SELECT landImage FROM lands WHERE id='$id'")->fetch_array();
        $files = mysqli_query($con,"SELECT landOptions FROM lands WHERE id='$id'")->fetch_array();
        $sql = "DELETE FROM lands WHERE id='$id'";
        if(mysqli_query($con,$sql)){
            mysqli_query($con,"DELETE FROM sellers WHERE sellerpropertyId='$id' and sellerProperty='land'");
            if($file['landImage']!=''){
                unlink($file['landImage']);
            }
            if($files['houseOptions']!=''){
                $imgs = explode(',',$files['houseOptions']);
                foreach($imgs as $im){
                    unlink($im);
                }
            }
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record deleted successfully!";
            header('location:../Admin/data_view.php?data=lands'); 
        }
        else{
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record not deleted successfully! Retry"; 
            header('location:../Admin/data_view.php?data=lands');
        }
    }

    //Delete comment
    if(isset($_GET['data'])&&$_GET['data']=='comment'){
        $id = $_GET['id'];
        $sql = "DELETE FROM comments WHERE id=$id";

        if(mysqli_query($con,$sql)){
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record deleted successfully!"; 
            header('location:../Admin/data_view.php?data=comments');
        }
        else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not deleted successfully! Retry"; 
        header('location:../Admin/data_view.php?data=comments');
        }
    }

      //Delete subscriber
    if(isset($_GET['data'])&&$_GET['data']=='subscriber'){
        $id = $_GET['id'];
        $sql = "DELETE FROM subscribers WHERE id=$id";

        if(mysqli_query($con,$sql)){
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record deleted successfully!"; 
            header('location:../Admin/data_view.php?data=subscribers');
        }
        else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not deleted successfully! Retry"; 
        header('location:../Admin/data_view.php?data=subscribers');
        }
    }

      //Delete comment
    if(isset($_GET['data'])&&$_GET['data']=='customer'){
        $id = $_GET['id'];
        $sql = "DELETE FROM customers WHERE id=$id";

        if(mysqli_query($con,$sql)){
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record deleted successfully!"; 
            header('location:../Admin/data_view.php?data=deals');
        }
        else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not deleted successfully! Retry"; 
        header('location:../Admin/data_view.php?data=deals');
        }
    }

    if(isset($_GET['data'])&&$_GET['data']=='request'){
        $id = $_GET['id'];
        $sql = "DELETE FROM requests WHERE id=$id";

        if(mysqli_query($con,$sql)){
            $_SESSION['insert'] = "bg-success";
            $_SESSION['message'] = "Record deleted successfully!"; 
            header('location:../Admin/data_view.php?data=deals');
        }
        else{
        $_SESSION['insert'] = "bg-warning";
        $_SESSION['message'] = "Record not deleted successfully! Retry"; 
        header('location:../Admin/data_view.php?data=deals');
        }
    }
?>