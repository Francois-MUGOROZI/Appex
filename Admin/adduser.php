<?php
  require '../database/connection.php';
  $pass = md5("12345");
  $sql = "INSERT INTO users(
      userName,
      userEmail,
      userPassword,
      userCategory
  ) VALUES(
      'Francois',
      'francois@gmail.com',
      '$pass',
      'admin'
  )";
  $con->query($sql);
?>