<?php
  try {
    session_start();
    // validate the email on PHP
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid email format!')</script>";
      header("Location:../index/index.php");
      exit();
    }
    // don't let blank submissions in
    if ($_POST["fname"] == "" || $_POST["lname"] == "" ||
      $_POST["address"] == "" || $_POST["city"] == "" ||
      $_POST["state"] == "" || $_POST["country"] == "" ||
      $_POST["postcode"] == "" || $_POST["phone"] == "" ||
      $_POST["email"] == "" || $_POST["contact"] == "" ||
      $_POST["payment"] == "" || $_POST["frequency"] == "" ||
      $_POST["amount"] == "") {
      echo "<script>alert('Blank inputs!')</script>";
      header("Location:../index/index.php");
      exit();
    }
    // take the user inputs and store them in the session
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
