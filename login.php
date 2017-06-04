<!DOCTYPE html>
<html>
<head>
    <title>Lovey Pets</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
</head>
<body>
<?php
    include 'header.php';
?>
<div class="whitespace"> </div>
    <div class="center">
        <form action="index.php">
            <label>Username</label>
            <input type="text" placeholder="Username">

            <label>Password</label>
            <input type="password" placeholder="Password">

            <input type="submit" value="Sign In">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>
</html>
