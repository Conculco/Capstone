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
<div class="bcontainer">

    <label>First Name</label>
    <input type="text" value="Jhon">

    <label>Last Name</label>
    <input type="text" value="Smith">

    <label>Date of Birth</label>
    <input type="date" value="18/07/1982">

    <label>Address</label>
    <input type="text" value="420 Stanton St, Cannon Hill QLD 4170">

    <label>Contact Number</label>
    <input type="text" value="0403425887">

    <label>Email</label>
    <input type="text" value="Jhon.Smith@gmail.com">

    <input type="submit" value="Update">
</div>
<div class="bcontainer">
    <select>
        <option>Dog</option>
        <option>Cat</option>
        <option>Fox</option>
    </select>
    <input type="submit" value="Create Booking">
</div>
<div class="bcontainer">
    <select>
        <option>Visit 1 - Cat - $124.12</option>
        <option>Visit 2 - Fox - $12.10</option>
        <option>Visit 3 - Cat - $18.17</option>
    </select>
    <input type="submit" value="Create Invoice">
</div>
</body>
</html>
