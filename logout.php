<!DOCTYPE html>
<html>
<head>
    <title>Lovely Pets</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon.ico"/>
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
