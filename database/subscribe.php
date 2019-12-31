<?php

  require 'connection.php';
  if(isset($_POST['subscribe'])){
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $sql = "SELECT subscriberEmail FROM subscribers WHERE subscriberEmail='$email'";

      if(mysqli_num_rows(mysqli_query($con,$sql))!=0){

      }
      else{
          $sql = "INSERT INTO subscribers (subscriberEmail) VALUES('$email')";
          if(mysqli_query($con,$sql)){
              header('location:../index.php');
          }
          else{
            header('location:../index.php');
          }
      }
  }

  if(isset($_POST['commentBtn'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $comment = mysqli_real_escape_string($con,$_POST['comment']);
    $sql = "INSERT INTO comments (
      commenter,
      commenterEmail,
      commentedAbout,
      comment)
      VALUES(
        '$name',
        '$email',
        'Website',
        '$comment'
      )";

      if(mysqli_query($con,$sql)){
        header('location:../index.php');
      }
  }

  if(isset($_POST['mail'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $subject = mysqli_real_escape_string($con,$_POST['subject']);
    $message = mysqli_real_escape_string($con,$_POST['message']);

    if(mail("francois@softclik.com",$subject,$message)){
      header('location:../index.php');
    }
  }

  //add customer
  if(isset($_POST['submit'])){
    $data = $_POST['data'];
    $dataId = $_POST['id'];
    $names = mysqli_real_escape_string($con,$_POST['names']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $location = mysqli_real_escape_string($con,$_POST['location']);

    $sql = "INSERT INTO customers(
      customerName,
      customerEmail,
      customerPhone,
      customerLocation,
      property,
      propertyId
    ) VALUES(
     '$names',
     '$email',
     '$phone',
     '$location',
     '$data',
     '$dataId'
    )";

    if(mysqli_query($con,$sql)){
     header('location:../index.php');
    }
    
  }

  //add requst
  if(isset($_POST['submitRequest'])){
    $names = mysqli_real_escape_string($con,$_POST['names']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $location = mysqli_real_escape_string($con,$_POST['location']);
    $property = mysqli_real_escape_string($con,$_POST['property']);
    $description = mysqli_real_escape_string($con,$_POST['description']);

    $sql = "INSERT INTO requests(
      names,
      email,
      phone,
      locations,
      property,
      descriptions
    ) VALUES(
     '$names',
     '$email',
     '$phone',
     '$location',
     '$property',
     '$description'
    )";

    if(mysqli_query($con,$sql))
        header('location:../index.php');
        else header('location:../register.php?who=customer&data=request');
    
  }
?>