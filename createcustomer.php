<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
<?php
    include 'header.php';
?>
    <div class="center">
        <form name="form" id="form">
            <label>First Name</label>
            <input id="firstname" type="text" placeholder="First Name">

			<label>Last Name</label>
            <input id="lastname" type="text" placeholder="Last Name">

			<label>Emergency Contact Number</label>
            <input id="emergencyContact" type="text" placeholder="Contact Number">

			<label>Street Address</label>
            <input id="address" type="text" placeholder="Street Address">

			<label>Email</label>
            <input id="email" type="text" placeholder="Email">

            <input id="submit" type="button" onclick="customerCreateFunction()" value="Create Customer">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>
</html>
