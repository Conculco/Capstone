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
        <form action="login/loginscript.php" method="post">
            <label>Username</label>
            <input name="username" type="text" placeholder="Username">

            <label>Password</label>
            <input name="password" type="password" placeholder="Password">

            <input type="submit" value="Sign In">
        </form>
    </div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
