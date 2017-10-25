<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <title>Lovely Pets</title>
    <link rel="icon" href="img/favicon.ico"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<?php
include 'header.php';
?>
<div class="center">
    <form action="create/invoicescript.php" method="post">
        <label>clinic_id</label>
        <input name="clinic_id" type="text" placeholder="">

        <label>customer_id</label>
        <input name="customer_id" type="text" placeholder="">

        <label>pet_id</label>
        <input name="pet_id" type="text" placeholder="">

        <label>date</label>
        <input name="date" type="text" placeholder="date">

        <label>Paid</label>
        <input name="paid" type="text" placeholder="Paid">

        <input type="submit" value="Create Invoice">
    </form>
</div>
<div class="whitespace"> </div>
<?php
include 'footer.php';
?>
</body>

</html>
