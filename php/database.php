<?php
  $mysqli = new mysqli("localhost","root",'S3Cur3P4s$w0rD',"donationDB");

  // Check connection
  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>
