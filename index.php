<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Enterprise solution for Pet Clinics">
    <meta name="author" content="Lovely Pets">
    <title>Lovely Pets | Welcome</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
    include 'header.php';
?>
<section id="showcase">
  <div class="container">
  <h1>Lovely Pets Information System</h1>
    <p>To begin, select from favourites below, or select from the drop down listings at the top of the page</p>
  </div>
  </section>
    <section id="howto">
      <div class ="container">
        <h1>Request a Password Reset</h1>
        <form>
          <input type="email" placeholder="Enter Users Email">
          <button type="submit" class="button1">Request a User Password Reset</button>
        </form>
    </section>
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="img/dogcat.png">
          <h3>Make a Customer Booking<h3>
            <p>Click here to make a customer booking<p>
        </div>
        <div class="box">
          <img src="img/Screen.png">
          <h3>Launch Custom Reports<h3>
            <p>Click here to launch the custom reports module<p>
        </div>
        <div class="box">
          <img src="img/syringe.png">
          <h3>Launch Inventory Manager<h3>
            <p>Click here to launch the inventory manager<p>
        </div>
      </div>
    </section>

<?php
    include 'footer.php';
?>
  </body>
</html>
