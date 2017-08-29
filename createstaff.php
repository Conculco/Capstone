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
			<label>Clinic ID</label>
            <input id="clinic_id" type="text" placeholder="1">

            <label>First Name</label>
            <input id="firstname" type="text" placeholder="First Name">

			<label>Last Name</label>
            <input id="lastname" type="text" placeholder="Last Name">

			<label>Date of Birth</label>
            <input id="dob" type="text" placeholder="2017-08-02">

			<label>Username</label>
            <input id="username" type="text" placeholder="Username">

			<label>Password</label>
            <input id="password" type="password" placeholder="Password">

			<label>Contact Number</label>
            <input id="phoneNumber" type="text" placeholder="Contact Number">

			<label>Street Address</label>
            <input id="address" type="text" placeholder="Street Address">

			<label>City</label>
            <input id="city" type="text" placeholder="City">

			<label>Post Code</label>
            <input id="postCode" type="text" placeholder="Post Code">

			<label>Email</label>
            <input id="email" type="text" placeholder="Email">

            <input type="button" id="submit" onclick="createStaffFunction()" value="Create Staff">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
