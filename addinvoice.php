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
<div class="center">
    <form action="create/addinvoicescript.php" method="post">

        <input name="invoice_id" type="hidden" value="<?php echo $_GET['invoice_id']?>">
        <input name="customer_id" type="hidden" value="<?php echo $_GET['customer_id']?>">

        <label>Pet Name</label>
        <select name="treatment_id">
            <?php
            $sql = "SELECT * FROM Treatment";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $description = $row["description"];
                    $treatment_id = $row["treatment_id"];
                    echo "<option value=\"$treatment_id\">$description</option>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </select>
        <input type="submit" value="Add to Invoice">
    </form>
</div>
<div class="whitespace"> </div>
<?php
include 'footer.php';
?>
</body>

</html>
