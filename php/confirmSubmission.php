<?php
  try {
    session_start();
    require_once 'database.php';

    // store the user info in MySQL with a prepared statement
    $stmt = $mysqli->prepare("CALL donationdb.insertDonor(?,?,?,?,?,?,?,?,?,?,?,?,?,?,@successConfirmation)");
    $stmt->bind_param("ssssssssssssds", $_SESSION["fname"], $_SESSION["lname"], $_SESSION["address"], $_SESSION["city"],
      $_SESSION["state"], $_SESSION["country"], $_SESSION["postcode"], $_SESSION["phone"],
      $_SESSION["email"], $_SESSION["contact"], $_SESSION["payment"], $_SESSION["frequency"],
      $_SESSION["amount"], $_SESSION["comments"]);
    $stmt->execute();
    $result = $stmt->fetch();
    $successConfirmation = $result['successConfirmation'];
    if ($successConfirmation > 0) {
      echo "success";
    } else {
      echo "fail";
    }
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
