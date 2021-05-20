<?php
  try {
    session_start();
    // take the user inputs and store them in the session
    // thankfully, the HTML form already validates email and payment amount
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["city"] = $_POST["city"];
    $_SESSION["state"] = $_POST["state"];
    $_SESSION["country"] = $_POST["country"];
    $_SESSION["postcode"] = $_POST["postcode"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["contact"] = $_POST["contact"];
    $_SESSION["payment"] = $_POST["payment"];
    $_SESSION["frequency"] = $_POST["frequency"];
    $_SESSION["amount"] = $_POST["amount"];
    $_SESSION["comments"] = $_POST["comments"];
    header("Location:../index/confirm.php");
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
