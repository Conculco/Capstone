<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovey Pets</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php
    include 'header.php';
?>
<div class="whitespace"> </div>
    <div class="center">
        <form action="createstaff/staffscript.php" method="post">
			<label>Clinic ID</label>
            <input name="clinic_id" type="text" placeholder="1">
		
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

            <input type="submit" value="Create Staff">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
