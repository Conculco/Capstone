﻿<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovely Pets</title>
    <link rel="icon" href="img/favicon.ico"/>
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
        <form action="create/staffscript.php" method="post">
			<label>Clinic ID</label>
            <input name="clinic_id" type="text" placeholder="">

            <label>First Name</label>
            <input name="firstname" type="text" placeholder="First Name">

			<label>Last Name</label>
            <input name="lastname" type="text" placeholder="Last Name">

			<label>Date of Birth</label>
            <input name="dob" type="text" placeholder="2017-08-02">

			<label>Username</label>
            <input name="username" type="text" placeholder="Username">

			<label>Password</label>
            <input name="password" type="password" placeholder="Password">

			<label>Contact Number</label>
            <input name="phoneNumber" type="text" placeholder="Contact Number">

			<label>Street Address</label>
            <input name="address" type="text" placeholder="Street Address">

			<label>City</label>
            <input name="city" type="text" placeholder="City">

			<label>Post Code</label>
            <input name="postCode" type="text" placeholder="Post Code">

			<label>Email</label>
            <input name="email" type="text" placeholder="Email">

            <label>Access level</label>
            <input name="access" type="text" placeholder="Access">

            <input type="submit" value="Create Pet">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
