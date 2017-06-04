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
<div class="center">
    <form action="stock.php">
        <label>Product Code</label>
        <input type="text" placeholder="First Name">

        <label>Product Name</label>
        <input type="text" placeholder="Last Name">

        <label>Date of Birth</label>
        <input type="date">

        <label>Address</label>
        <input type="text" placeholder="Address">

        <label>Contact Number</label>
        <input type="text" placeholder="Contact Number">

        <label>Email</label>
        <input type="text" placeholder="Email">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>