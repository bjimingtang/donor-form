<?php
  try {
    session_start();
    // unset all session variables
    session_destroy();
    header("Location:../index/cancel.php");
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
