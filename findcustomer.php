<!DOCTYPE html>
<html>
<head>
    <title>Lovely Pets</title>
    <link rel="icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
</head>
<body>
<?php
    include 'header.php';
?>
<div class="centerlong">
    <form action="booking.php">
        <label>Customer Lookup</label>
        <input type="text" placeholder="Name">

        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>Jhon</td>
                <td>Zeller</td>
                <td>18/07/1972</td>
                <td>420 Stanton St, Cannon Hill QLD 4170</td>
                <td>0405467123</td>
                <td>Jhon.Zeller@gmail.com</td>
            </tr>
            <tr>
                <td>Jill</td>
                <td>Bensin</td>
                <td>18/07/1984</td>
                <td>35 Grenade St, Cannon Hill QLD 4170</td>
                <td>5465465647</td>
                <td>Jill.Bensin@gmail.com</td>
            </tr>
            <tr>
                <td>James</td>
                <td>Drinkwater</td>
                <td>18/07/1996</td>
                <td>19 Puma St, Tingalpa QLD 4173</td>
                <td>0403425876</td>
                <td>James.Drinkwater@gmail.com</td>
            </tr>
            <tr>
                <td>Luke</td>
                <td>Trail</td>
                <td>18/07/1998</td>
                <td>1 Banbury St, Carina QLD 4152</td>
                <td>0403567822</td>
                <td>Luke.Trail@gmail.com</td>
            </tr>
            <tr>
                <td>Craig</td>
                <td>Griffin</td>
                <td>18/07/2001</td>
                <td>4-10 Pinedale St, Morningside QLD 4170</td>
                <td>0403345767</td>
                <td>Craig.Griffin@gmail.com</td>
            </tr>
        </table>


        <input type="submit" value="Select Customer">
    </form>
</div>
</body>
</html>
