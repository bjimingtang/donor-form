<?php
  // in index/index.php, replace the form's action with this file's name to use this to test.
  function unitTests()
  {
    //validate email
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      echo "<script>alert('Invalid email format!')</script>";
      exit();
    }

    // validate payment amount
    if (!preg_match("/^-?[0-9]+(?:\.[0-9]{1,2})?$/", $_POST["amount"])) {
      echo "<script>alert('Invalid payment amount!')</script>";
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
      exit();
    }
  }
  try {
    session_start();
    // run the tests
    unitTests();
    header("Location:../index/confirm.php");
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
