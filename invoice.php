<?php
session_start();
include("./configsqli.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lovely Pets</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="img/favicon.ico"/>
</head>

<body>
<?php
include 'header.php';
?>
<div class="whitespace"> </div>
<div class="center-wide">


<style>
    table.fixed { table-layout:fixed; }
    table.fixed td { overflow: hidden; }
</style>
<?php
    include 'configsqli.php';
    $invoice_id = $_GET['invoice_id'];

    $sql = "SELECT * FROM Invoice WHERE invoice_id = $invoice_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $customer_id = $row["customer_id"];
        $pet_id = $row["pet_id"];
        $clinic_id = $row["clinic_id"];
        $date = $row["date"];
        $paid = $row["paid"];
    }
    } else {
    echo "0 results";
    }

    $sql = "SELECT * FROM Customer WHERE customer_id = $customer_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $address = $row["address"];
            $email = $row["email"];
        }
    } else {
        echo "0 results";
}

$sql = "SELECT * FROM Pet WHERE pet_id = $pet_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $petname = $row["petname"];
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM Clinic WHERE clinic_id = $clinic_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $clinic_address = $row["address"];
        $clinic_name = $row["name"];
        $clinic_phone = $row["phone"];
        $clinic_fax = $row["fax"];
        $clinic_email = $row["email"];
    }
} else {
    echo "0 results";
}
?>


<table style="width:95%" align="center" class="fixed">
    <tr>
        <th>Lovey Pets</th>
    </tr>
    <tr>
        <td><?php echo $firstname . " " . $lastname; ?></td>
        <td>Invoice Date: <?php echo $date; ?></td>
    </tr>
    <tr>
        <td><?php echo $address; ?></td>
        <td>Invoice Number: <?php echo $invoice_id; ?></td>
    </tr>
    <tr>
        <td><?php echo $email; ?></td>
        <td>Pet Treated Name: <?php echo $petname; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Doctor:</td>
    </tr>
</table>
    <div class="whitespace"> </div>
    <div class="whitespace"> </div>
<table style="width:95%" align="center" class="fixed">
    <tr>
        <td><b><u>Tax Invoice for Professional Services</u></b></td>
    </tr>
</table>
<table style="width:95%" align="center" class="fixed">
    <tr>
        <td><b>Service</b></td>
        <td><b>QTY</b></td>
        <td><b>Amount</b></td>
    </tr>

    <?php
    $sql = "SELECT * FROM Orders INNER JOIN Treatment ON Orders.treatment_id = Treatment.treatment_id;";
    $result = $conn->query($sql);
    $total = 0;
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["description"] .  "</td>";
        echo "<td>" . "1" .  "</td>";
        echo "<td>$" . $row["cost"] .  "</td>";
        echo "</tr>";
        $total += $row["cost"];
    }
    } else {
    echo "0 results";
    }
    ?>

    <tr>
        <td> </td>
        <td>Total:</td>
        <td>$<?php echo $total; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Includes GST:</td>
        <td>$<?php echo round($total/11,2); ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Amount Paid:</td>
        <td>$<?php echo $paid; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Balance Remaining:</td>
        <td>$<?php echo $total - $paid; ?></td>
    </tr>
</table>

    <div class="whitespace"> </div>
    <div class="whitespace"> </div>
<table style="width:95%" align="center" class="fixed">
    <tr>
        <td></td>
        <td>Store: <?php echo $clinic_name; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Address: <?php echo $clinic_address; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>Phone: <?php echo $clinic_phone; ?> Fax: <?php echo $clinic_fax; ?>2</td>
    </tr>
    <tr>
        <td>www.LovelyPets.com.au</td>
        <td>Email: <?php echo $clinic_email; ?></td>
    </tr>
</table>
</div>
</div>