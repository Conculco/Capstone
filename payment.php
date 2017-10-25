<!DOCTYPE html>
<?php
session_start();
include("./configsqli.php");
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
<?php
$invoice_id = $_GET['invoice_id'];
?>
<div class="center">
    <form action="create/paymentscript.php" method="post">

        <input name="invoice_id" type="hidden" value="<?php echo $_GET['invoice_id']?>">
        <input name="customer_id" type="hidden" value="<?php echo $_GET['customer_id']?>">

        <label>Paid: $</label>


            <?php
            $sql = "SELECT * FROM Invoice WHERE invoice_id = $invoice_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo $row["paid"];
                }
            } else {
                echo "0 results";
            }
            ?>
        <br>
        <br>
        <label>Pay</label>
        <input name="paid" type="text">
        <input type="submit" value="Add to Invoice">
    </form>
</div>
<div class="whitespace"> </div>
<?php
include 'footer.php';
?>
</body>

</html>
