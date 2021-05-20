<?php
  try {
    session_start();
    // unset all session variables
    session_destroy();
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
