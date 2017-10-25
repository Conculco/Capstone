<!DOCTYPE html>
<?php
include("./config.php");
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Enterprise solution for Pet Clinics">
    <meta name="author" content="Lovely Pets">
    <title>Lovely Pets | Welcome </title>
    <link rel="icon" href="img/favicon.ico"/>
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
        <h1>Quick Customer Search</h1>
        <form>
          <input type="email" placeholder="Enter Customer Name">
          <input type="submit">Find Customer</input>
        </form>
    </section>
    <section id="boxes">
      <div class="container">
        <div class="box">
          <a href="searchcustomer.php"</a>
          <img src="img/dogcat.png"></img>
          <h3>Search for Customer<h3>
            <p>Click here to find a customer<p>
        </div>
        <div class="box">
          <a href="createcustomer.php"</a>
          <img src="img/Screen.png"></img>
          <h3>Create New Customer<h3>
            <p>Click here to create a new customer<p>
        </div>
        <div class="box">
          <a href="booking.php"</a>
          <img src="img/syringe.png"></img>
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
