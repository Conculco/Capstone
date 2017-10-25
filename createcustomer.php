<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovely Pets</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php
    include 'header.php';
?>
    <div class="center">
        <form action="create/customerscript.php" method="post">
            <label>First Name</label>
            <input name="firstname" type="text" required placeholder="First Name">

			<label>Last Name</label>
            <input name="lastname" type="text" required placeholder="Last Name">

			<label>Emergency Contact Number</label>
            <input name="emergencyContact" type="text" required placeholder="Contact Number">

			<label>Street Address</label>
            <input name="address" type="text" required placeholder="Street Address">

			<label>Email</label>
            <input name="email" type="email" required placeholder="Email">

            <input type="submit" value="Create Customer">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>
</html>
