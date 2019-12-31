<?php
  session_start();
  $_SESSION['user'] = '';
  $_SESSION['userCat']='';
   session_destroy();
   header('location:login.php');
?>