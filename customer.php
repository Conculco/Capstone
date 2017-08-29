﻿<?php
session_start();
//include("./config.php");
include("./configsqli.php");
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

<?php
    $id = $_GET['id'];

    echo "<label>Customer Details</label>";
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

echo "<label>Pets</label>";
    $sql = "SELECT * FROM Pet Where customer_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<form action='' method='post'>";
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Pet Name</th><th>Date of Birth</th><th>Sex</th><th>Species</th><th>Breed</th><th>Description</th><th>Microchip ID</th></tr>";
        while($row = $result->fetch_assoc()) {
            $pet_id = $row["pet_id"];
            echo "<tr>" .
                "<td>" . $row["petname"] . "</td>".
                "<td>" . $row["dob"] . "</td>".
                "<td>" . $row["sex"] . "</td>".
                "<td>" . $row["species"] . "</td>".
                "<td>" . $row["breed"] . "</td>".
                "<td>" . $row["description"] . "</td>".
                "<td>" . $row["microchip_id"] . "</td>".
                "<td>" . "<button type=\"submit\" formaction=\"createbooking.php?pet_id=$pet_id\">Booking</button>" . "</td>".
                "</tr>";
        }
        echo "</form>";
        echo "</table>";
    } else {
        echo "0 results";
    }

?>


<?php
    include 'footer.php';
?>
</body>

</html>