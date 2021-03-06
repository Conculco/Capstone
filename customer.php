﻿<!DOCTYPE html>
<?php
include("./configsqli.php");
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
<div class="whitespace"> </div>
<div class="center2">
<?php
    $id = $_GET['id'];

    echo "<h1>Customer Details</h1>";
    $sql = "SELECT * FROM Customer Where customer_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Contact Number</th><th>Firstname</th><th>Lastname</th><th>Address</th><th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            $url = $row["customer_id"];
            echo "<tr>" .
                "<td>" . $row["emergencyContact"] . "</td>" .
                "<td>" . $row["firstname"] . "</td>".
                "<td>" . $row["lastname"] . "</td>".
                "<td>" . $row["address"] . "</td>".
                "<td>" . $row["email"] . "</td>".
                "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    echo "<form action='' method='post'>";
    echo "<h1>Pets <button type=\"submit\" formaction=\"createpet.php?id=$id\">Add Pet</button></h1>";
    echo "</form>";
    $sql = "SELECT * FROM Pet Where customer_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<form action='' method='post'>";
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Pet Name</th><th>Date of Birth</th><th>Sex</th><th>Species</th><th>Breed</th><th>Description</th><th>Microchip ID</th><th>Booking Pet</th><th>Edit Pet</th><th>Delete Pet</th></tr>";
        while($row = $result->fetch_assoc()) {
            $pet_id = $row["pet_id"];
            $customer_id = $row["customer_id"];
            $petname = $row["petname"];
            $dob = $row["dob"];
            $sex = $row["sex"];
            $species = $row["species"];
            $breed = $row["breed"];
            $description = $row["description"];
            $microchip_id = $row["microchip_id"];

            echo "<tr>" .
                "<td>" . $row["petname"] . "</td>".
                "<td>" . $row["dob"] . "</td>".
                "<td>" . $row["sex"] . "</td>".
                "<td>" . $row["species"] . "</td>".
                "<td>" . $row["breed"] . "</td>".
                "<td>" . $row["description"] . "</td>".
                "<td>" . $row["microchip_id"] . "</td>".
                "<td>" . "<button type=\"submit\" formaction=\"selectdate.php?pet_id=$pet_id\">Booking</button>" . "</td>".
                "<td>" . "<button type=\"submit\" formaction=\"petedit.php?pet_id=$pet_id&customer_id=$customer_id&petname=$petname&dob=$dob&sex=$sex&species=$species&breed=$breed&description=$description&microchip_id=$microchip_id\">Edit</button>" . "</td>".
                "<td>" . "<button type=\"submit\" formaction=\"petprompt.php?pet_id=$pet_id&customer_id=$customer_id&petname=$petname&dob=$dob&sex=$sex&species=$species&breed=$breed&description=$description&microchip_id=$microchip_id\">Delete</button>" . "</td>".
                "</tr>";
        }
        echo "</form>";
        echo "</table>";
    } else {
        echo "0 results";
    }
echo "<form action='' method='post'>";
echo "<h1>Invoice <button type=\"submit\" formaction=\"createinvoice.php?id=$id\">Create invoice</button></h1>";
echo "</form>";
$sql = "SELECT * FROM Invoice INNER JOIN Pet ON Invoice.pet_id = Pet.pet_id Where Invoice.customer_id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<form action='' method='post'>";
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Invoice ID</th><th>Pet Name</th><th>Paid</th></tr>";
    while($row = $result->fetch_assoc()) {
        $url = $row["invoice_id"];
        echo "<tr>" .
            "<td>" . $row["invoice_id"] . "</td>" .
            "<td>" . $row["petname"] . "</td>".
            "<td>" . $row["paid"] . "</td>".
            "<td>" . "<button type=\"submit\" formaction=\"addinvoice.php?invoice_id=$url&customer_id=$id\">Add item</button>" . "</td>".
            "<td>" . "<button type=\"submit\" formaction=\"invoice.php?invoice_id=$url\">Invoice Details</button>" . "</td>".
            "<td>" . "<button type=\"submit\" formaction=\"payment.php?invoice_id=$url&customer_id=$id\">Payment</button>" . "</td>".
            "</tr>";
    }
    echo "</form>";
    echo "</table>";
} else {
    echo "0 results";
}

?>
</div>
<div class="whitespace"> </div>
<?php
    include 'footer.php';
?>
</body>

</html>
