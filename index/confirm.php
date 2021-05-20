<?php
  session_start();
  // confirm that the variables are set
  if (!isset($_SESSION["fname"]) || !isset($_SESSION["lname"]) ||
    !isset($_SESSION["address"]) || !isset($_SESSION["city"]) ||
    !isset($_SESSION["state"]) || !isset($_SESSION["country"]) ||
    !isset($_SESSION["postcode"]) || !isset($_SESSION["phone"]) ||
    !isset($_SESSION["email"]) || !isset($_SESSION["contact"]) ||
    !isset($_SESSION["payment"]) || !isset($_SESSION["frequency"]) ||
    !isset($_SESSION["amount"]) || !isset($_SESSION["comments"])) {
    // go back to index if a variable is not found
    header("Location:index.php");
  }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Confirmation page</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/styles.css">

  </head>

  <body>
    <!-- display the user's information -->
    <p>First name: <?= $_SESSION["fname"] ?></p>
    <p>Last name: <?= $_SESSION["lname"] ?></p>
    <p>Address: <?= $_SESSION["address"] ?></p>
    <p>City: <?= $_SESSION["city"] ?></p>
    <p>State: <?= $_SESSION["state"] ?></p>
    <p>Country: <?= $_SESSION["country"] ?></p>
    <p>Post code: <?= $_SESSION["postcode"] ?></p>
    <p>Phone: <?= $_SESSION["phone"] ?></p>
    <p>Email: <?= $_SESSION["email"] ?></p>
    <p>Preferred contact method: <?= $_SESSION["contact"] ?></p>
    <p>Payment currency: <?= $_SESSION["payment"] ?></p>
    <p>Payment frequency: <?= $_SESSION["frequency"] ?></p>
    <p>Payment amount: <?= $_SESSION["amount"] ?></p>
    Yearly payment in your currency: <p id="yearlyPayment"></p>
    Yearly payment in USD: <p id="yearlyPaymentUSD"></p>
    <p>Comments: <?= $_SESSION["comments"] ?></p>

    <!-- Confirmation -->
    Is the above information what you want to submit?
    <br>
    <button onclick="confirmSubmission()">Yes, it is!</button>
    <button onclick="window.location.href='index.php'">I need to edit something!</button>
    <button onclick="returnToStart()">Nope, let me go back!</button>

    <script src="../js/confirmation.js"></script>
  </body>
  <!-- money conversion -->
  <script>
    try{
      var payment = <?= $_SESSION["amount"] ?>;
      var paymentUSD = <?= $_SESSION["amount"] ?>;
      if ("<?= $_SESSION["frequency"] ?>" == "monthly") {
        payment = payment * 12;
        paymentUSD = paymentUSD * 12;
      }
      // convert to USD if need be
      // use an API to dynamically generate the rates in a live environment with more time
      if ("<?= $_SESSION["payment"] ?>" == "euro") {
        paymentUSD = paymentUSD * 1.22;
      } else if ("<?= $_SESSION["payment"] ?>" == "bitcoin") {
        paymentUSD = paymentUSD * 40857;
      }
      // set innerText of the appropriate elements
      document.getElementById("yearlyPayment").innerText = payment;
      document.getElementById("yearlyPaymentUSD").innerText = paymentUSD;
    } catch (e) {

    }

    console.log(payment);
    console.log(paymentUSD);
  </script>
</html>
