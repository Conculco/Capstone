<!DOCTYPE html>
<html>
<head>
    <title>Lovey Pets</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5; url=login.php" />
</head>
<body>
<?php
    include 'header.php';
?>
<?php
    session_start();
    session_unset();
?>
<div class="center">
    <div class="centertext">
        <h1>Logout Successful</h1>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
