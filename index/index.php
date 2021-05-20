<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Donor Form</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/styles.css">

  </head>

  <body>
    <form action="../php/submit_information.php" method="post">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" required><br>

      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" required><br>

      <label for="address">Street address:</label><br>
      <input type="text" id="address" name="address" required><br>

      <label for="city">City:</label><br>
      <input type="text" id="city" name="city" required><br>

      <label for="state">State/Region:</label><br>
      <input type="text" id="state" name="state" required><br>

      <label for="country">Country:</label><br>
      <select id="country" name="country"></select><br>

      <label for="postcode">Postal code:</label><br>
      <input type="text" id="postcode" name="postcode" required><br>

      <label for="phone">Phone number:</label><br>
      <input type="text" id="phone" name="phone" required><br>

      <label for="email">Email address:</label><br>
      <input type="email" id="email" name="email" required><br>

      <label for="contact">Preferred form of contact:</label><br>
      <select id="contact" name="contact">
        <option value="email">Email</option>
        <option value="phone">Phone</option>
      </select><br>

      <label for="payment">Preferred form of payment:</label><br>
      <select id="payment" name="payment">
        <option value="usd">USD</option>
        <option value="euro">Euro</option>
        <option value="bitcoin">Bitcoin</option>
      </select><br>

      <label for="frequency">Donation frequency:</label><br>
      <select id="frequency" name="frequency">
        <option value="once">One time</option>
        <option value="monthly">Monthly</option>
        <option value="yearly">Yearly</option>
      </select><br>

      <label for="amount">Donation amount:</label><br>
      <input type="number" min="0.01" step="0.01" id="amount" name="amount" required><br>

      <label for="comments">Comments:</label><br>
      <textarea id="comments" name="comments"></textarea><br>

      <input type="submit" value="Review" />
    </form>
    <script src="../js/countryFillIn.js"></script>
  </body>
</html>
