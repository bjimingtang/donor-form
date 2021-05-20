<?php
  try {
    session_start();
    // store the user info in MySQL
    // $_SESSION["fname"] = $_POST["fname"];
    // $_SESSION["lname"] = $_POST["lname"];
    // $_SESSION["address"] = $_POST["address"];
    // $_SESSION["city"] = $_POST["city"];
    // $_SESSION["state"] = $_POST["state"];
    // $_SESSION["country"] = $_POST["country"];
    // $_SESSION["postcode"] = $_POST["postcode"];
    // $_SESSION["phone"] = $_POST["phone"];
    // $_SESSION["email"] = $_POST["email"];
    // $_SESSION["contact"] = $_POST["contact"];
    // $_SESSION["payment"] = $_POST["payment"];
    // $_SESSION["frequency"] = $_POST["frequency"];
    // $_SESSION["amount"] = $_POST["amount"];
    // $_SESSION["comments"] = $_POST["comments"];

    // redirect to thank you page
    header("Location:../index/thankyou.php");
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
